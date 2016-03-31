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

            [
                'product' => "NanoCelle Activated B12",
                'name' => "March 2016 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 4 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '26/02/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'minimum_qty' => '4',
                'bonus_qty' => '1'
            ],
            [
                'product' => "SB 5B",
                'name' => "March 2016 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 4 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '26/02/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'minimum_qty' => '4',
                'bonus_qty' => '1'
            ],
            [
                'product' => "BioticNatal",
                'name' => "March 2016 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 4 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '26/02/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'minimum_qty' => '4',
                'bonus_qty' => '1'
            ],

        ];

        $discount_deals = [

            [
                'product' => '12Mg Optima Relax',
                'name' => "Website Relaunch Special",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '10% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '10'
            ],
            [
                'product' => 'BioClean EPA:DHA + CoQ10 60s',
                'name' => "March 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '25% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '25'
            ],
            [
                'product' => 'BioClean EPA:DHA + CoQ10 120s',
                'name' => "March 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '25% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '25'
            ],
            [
                'product' => 'BioClean EPA:DHA + Plant Sterols 120s',
                'name' => "Website Relaunch Special",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '10% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '10'
            ],
            [
                'product' => 'BioClean EPA:DHA + Plant Sterols 60s',
                'name' => "Website Relaunch Special",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '10% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '10'
            ],
            [
                'product' => 'Biotic Jnr.',
                'name' => "Website Relaunch Special",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '10% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '10'
            ],
            [
                'product' => "Enbiotic 120's",
                'name' => "Website Relaunch Special",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '10% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '10'
            ],
            [
                'product' => "Enbiotic 60's",
                'name' => "Website Relaunch Special",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '10% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '10'
            ],
            [
                'product' => "GastroDaily",
                'name' => "Website Relaunch Special",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '10% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '10'
            ],
            [
                'product' => "MultiBiotic 120's",
                'name' => "Website Relaunch Special",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '10% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '10'
            ],
            [
                'product' => "MultiBiotic 60's",
                'name' => "Website Relaunch Special",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '10% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '10'
            ],
            [
                'product' => "MultiBiotic 30's",
                'name' => "Website Relaunch Special",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '10% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '10'
            ],
            [
                'product' => "NRGBiotic 120's",
                'name' => "March 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '25% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '25'
            ],
            [
                'product' => "NRGBiotic 60's",
                'name' => "March 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '25% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '25'
            ],
            [
                'product' => "NanoCelle B12",
                'name' => "Website Relaunch Special",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '10% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '10'
            ],
            [
                'product' => "NanoCelle D3",
                'name' => "Website Relaunch Special",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '10% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '10'
            ],
            [
                'product' => "ORSBiotic",
                'name' => "March 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '25% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '25'
            ],
            [
                'product' => "W8Biotic Lemon & Lime",
                'name' => "March 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '25% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '25'
            ],
            [
                'product' => "W8Biotic Strawberries & Cream",
                'name' => "March 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '25% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/03/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/03/2016 23:59:59'),
                'discount_percentage' => '25'
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