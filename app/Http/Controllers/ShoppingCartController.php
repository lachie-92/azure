<?php
namespace App\Http\Controllers;

use App\Http\Requests\ShoppingCartCheckoutRequest;
use App\Http\Requests\ShoppingCartUpdateAddressRequest;
use App\Medlab\Billing\BillingInterface;
use App\Medlab\ShoppingCart\ShoppingCart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ShoppingCartController extends Controller
{
    /**
     * Shopping Cart
     *
     * @var ShoppingCart
     */
    protected $shoppingCart;

    /**
     * Constructor for the ShoppingCartController
     *
     * @param ShoppingCart $shoppingCart
     */
    public function __construct(ShoppingCart $shoppingCart)
    {
        $this->middleware('authNotAdmin');
        $this->middleware('shoppingCartNotEmpty', [
            'except' => [
                'getShoppingCart',
                'postShoppingCart',
            ]
        ]);

        $this->shoppingCart = $shoppingCart;

        parent::__construct();
    }

    /**
     * Display the shopping cart basket
     *
     * @return \Illuminate\Http\Response
     */
    public function getShoppingCart()
    {
        $shoppingCart = $this->shoppingCart;

        return view('pages.shoppingcart.cart.index', compact('shoppingCart'));
    }

    /**
     * Update the shopping cart basket
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postShoppingCart(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|exists:products,id',
            'product_quantity' => 'required|integer|between:0,99'
        ]);

        $shoppingCart = $this->shoppingCart;
        $shoppingCart->updateBasket($request);

        return redirect('/shoppingcart/cart');
    }

    /**
     * Display the page for entering Shipping and Billing Addresses
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddress()
    {
        $shoppingCart = $this->shoppingCart;
        $shoppingCart->getShippingAddress();
        $shoppingCart->getBillingAddress();

        return view('pages.shoppingcart.address.index', compact('shoppingCart'));
    }

    /**
     * Update the Billing and Shipping Addresses
     *
     * @param ShoppingCartUpdateAddressRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddress(ShoppingCartUpdateAddressRequest $request)
    {
        $shoppingCart = $this->shoppingCart;
        $shoppingCart->updateShippingAddress($request);
        $shoppingCart->updateBillingAddress($request);
        $order = $shoppingCart->createOrder();
        session()->put('new_order', $order);

        return redirect('/shoppingcart/summary');
    }

    /**
     * Display the checkout summary page
     *
     * @param BillingInterface $billing
     * @return \Illuminate\Http\Response
     */
    public function getSummary(BillingInterface $billing)
    {
        if (!session()->has('new_order')) {

            return redirect('/shoppingcart/cart');
        }

        $order = session()->get('new_order');
        $clientToken = $billing->getClientToken();

        return view('pages.shoppingcart.summary.index', compact('order', 'clientToken'));
    }

    /**
     * Process the order and checkout
     *
     * @param ShoppingCartCheckoutRequest $request
     * @param BillingInterface $billing
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function postCheckout(ShoppingCartCheckoutRequest $request, BillingInterface $billing)
    {
        $result = $billing->processOrder($request);

        if ($result->success) {

            session()->forget('basket');
            session()->forget('new_order');

            $order = Order::findOrFail($request['order']);

            $data = array();
            $data['order'] = serialize($order);

            Mail::queue('emails.new_order_received', $data, function($message) use ($order) {

                $message->from('order_temp_email@medlab.co')
                    ->to('13533test@gmail.com')
                    ->subject('Medlab - A New Order has been received');
            });

            return view('pages.shoppingcart.order.index', compact('order'));
        }
        else {

            $errors = [];

            foreach ($result->errors->deepAll() as $error) {
                $errors[] = $error->message;
            }

            return redirect('/shoppingcart/summary')->with('errors', collect($errors));
        }
    }
}
