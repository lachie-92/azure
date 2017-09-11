<?php

namespace App\Console\Commands;

use App\Buy_One_Get_One_Free;
use App\Price_Discount;
use App\Promotion;
use DB;
use Carbon\Carbon;
use App\Product;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;

class UpdateDeal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:deal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'delete old deals to replace with new';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Model::unguard();

        DB::statement("SET foreign_key_checks = 0");
        Buy_One_Get_One_Free::truncate();
        Price_Discount::truncate();
        Promotion::truncate();
        DB::statement("SET foreign_key_checks = 1");

        $buy_one_get_one_free_deals = [

            //Till End of August
            [
                'product' => "GastroDaily",
                'name' => "August 2017 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 3 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/08/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/08/2017 23:59:59'),
                'minimum_qty' => '3',
                'bonus_qty' => '1'
            ],
            [
                'product' => "Immune-5 Vanilla",
                'name' => "August 2017 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 3 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/08/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/08/2017 23:59:59'),
                'minimum_qty' => '3',
                'bonus_qty' => '1'
            ],
            [
                'product' => "Immune-5 Raspberry",
                'name' => "August 2017 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 3 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/08/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/08/2017 23:59:59'),
                'minimum_qty' => '3',
                'bonus_qty' => '1'
            ],
            [
                'product' => "Manuka-C 105g",
                'name' => "August 2017 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 3 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/08/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/08/2017 23:59:59'),
                'minimum_qty' => '3',
                'bonus_qty' => '1'
            ],
            [
                'product' => "Manuka-C 210g",
                'name' => "August 2017 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 3 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/08/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/08/2017 23:59:59'),
                'minimum_qty' => '3',
                'bonus_qty' => '1'
            ],
            [
                'product' => "ORSBiotic Sachets",
                'name' => "Introductory Offer",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 4 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/08/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/08/2017 23:59:59'),
                'minimum_qty' => '4',
                'bonus_qty' => '1'
            ],

            //Till End of September
            [
                'product' => "BioClean EPA:DHA + Plant Sterols 120s",
                'name' => "September 2017 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 5 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/09/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/09/2017 23:59:59'),
                'minimum_qty' => '5',
                'bonus_qty' => '1'
            ],
            [
                'product' => "BioClean EPA:DHA + Plant Sterols 60s",
                'name' => "September 2017 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 5 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/09/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/09/2017 23:59:59'),
                'minimum_qty' => '5',
                'bonus_qty' => '1'
            ],
            [
                'product' => "NOS",
                'name' => "September 2017 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 5 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/09/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/09/2017 23:59:59'),
                'minimum_qty' => '5',
                'bonus_qty' => '1'
            ],
            [
                'product' => "W8Biotic Lemon & Lime",
                'name' => "September 2017 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 5 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/09/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/09/2017 23:59:59'),
                'minimum_qty' => '5',
                'bonus_qty' => '1'
            ],
            [
                'product' => "W8Biotic Strawberries & Cream",
                'name' => "September 2017 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 5 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/09/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/09/2017 23:59:59'),
                'minimum_qty' => '5',
                'bonus_qty' => '1'
            ],
            [
                'product' => "Lactoferrin Enhanced",
                'name' => "September 2017 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 4 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/09/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/09/2017 23:59:59'),
                'minimum_qty' => '4',
                'bonus_qty' => '1'
            ],
            [
                'product' => "BifidoBiotic",
                'name' => "September 2017 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 4 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/09/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/09/2017 23:59:59'),
                'minimum_qty' => '4',
                'bonus_qty' => '1'
            ],

        ];

        $discount_deals = [

            //Till End of June
            [
                'product' => "Immune-5 Raspberry",
                'name' => "June 2017 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Immunity Boost Bundle',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/06/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/06/2017 23:59:59'),
                'discount_percentage' => '24.59'
            ],
            [
                'product' => "Immune-5 Vanilla",
                'name' => "June 2017 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Immunity Boost Bundle',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/06/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/06/2017 23:59:59'),
                'discount_percentage' => '24.59'
            ],
            [
                'product' => "Manuka-C 105g",
                'name' => "June 2017 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Immunity Boost Bundle',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/06/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/06/2017 23:59:59'),
                'discount_percentage' => '37.66'
            ],

            [
                'product' => "Mg Optima Relax 150g Citrus Tea",
                'name' => "June 2017 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '25% off',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/06/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/06/2017 23:59:59'),
                'discount_percentage' => '25'
            ],
            [
                'product' => "Mg Optima Relax 150g Lemon Lime",
                'name' => "June 2017 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '25% off',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/06/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/06/2017 23:59:59'),
                'discount_percentage' => '25'
            ],
            [
                'product' => "Mg Optima Relax 300g Lemon Lime",
                'name' => "June 2017 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '25% off',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/06/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/06/2017 23:59:59'),
                'discount_percentage' => '25'
            ],
            [
                'product' => "Mg Optima Relax 10pk Sachets Lemon Lime",
                'name' => "June 2017 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '25% off',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/06/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/06/2017 23:59:59'),
                'discount_percentage' => '25'
            ],

            //Till End of July
            [
                'product' => "NanoCelle D3",
                'name' => "Short Dated Stock Deal",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '40% off (Nov 2017 Expiry)',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/07/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2017 23:59:59'),
                'discount_percentage' => '40'
            ],
            [
                'product' => "NanoCelle Activated B12",
                'name' => "Short Dated Stock Deal",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '40% off (Dec 2017 Expiry)',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/07/2017 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/11/2017 23:59:59'),
                'discount_percentage' => '40'
            ],

        ];


        $this->create_buy_one_get_one_free_deals($buy_one_get_one_free_deals);
        $this->create_discount_deals($discount_deals);

        Model::reguard();
    }

    private function create_buy_one_get_one_free_deals($deals)
    {
        foreach ($deals as $deal) {

            if ($deal['product'] == 'All') {
                $products = Product::all();
                foreach ($products as $product) {
                    $this->create_buy_one_get_one_free_promotion($deal, $product);
                }
            }
            else {
                $product = Product::where('product_name_index', 'like', '%' . $deal['product'] . '%')->firstOrFail();
                $this->create_buy_one_get_one_free_promotion($deal, $product);
            }
        }
    }

    private function create_buy_one_get_one_free_promotion($deal, $product)
    {
        $promotion = Promotion::create([

            'product_id' => $product->id,
            'name' => $deal['name'],
            'type' => $deal['type'],
            'apply_to_group' => $deal['apply_to_group'],
            'description' => $deal['description'],
            'isActive' => $deal['isActive'],
            'starting_date' => $deal['starting_date'],
            'end_date' => $deal['end_date']
        ]);

        Buy_One_Get_One_Free::create([

            'promotion_id' => $promotion->id,
            'minimum_qty' => $deal['minimum_qty'],
            'bonus_qty' => $deal['bonus_qty']
        ]);
    }

    private function create_discount_deals($deals)
    {
        foreach ($deals as $deal) {

            if ($deal['product'] == 'All') {
                $products = Product::all();
                foreach ($products as $product) {
                    $this->create_discount_promotion($deal, $product);
                }
            }
            else {
                $product = Product::where('product_name_index', 'like', '%' . $deal['product'] . '%')->firstOrFail();
                $this->create_discount_promotion($deal, $product);
            }
        }
    }

    private function create_discount_promotion($deal, $product)
    {
        $promotion = Promotion::create([

            'product_id' => $product->id,
            'name' => $deal['name'],
            'type' => $deal['type'],
            'apply_to_group' => $deal['apply_to_group'],
            'description' => $deal['description'],
            'isActive' => $deal['isActive'],
            'starting_date' => $deal['starting_date'],
            'end_date' => $deal['end_date']
        ]);

        Price_Discount::create([

            'promotion_id' => $promotion->id,
            'discount_percentage' => $deal['discount_percentage']
        ]);
    }
}
