<?php

use Illuminate\Database\Seeder;

use App\ProductPrice;

class ProductPricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices = [
                ["product_id"  => 1, "type" => 'euro',  "symbol"=>'€', "price" => 10.88, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 1, "type" => 'dolar', "symbol"=>'$', "price" => 10.00, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 2, "type" => 'euro',  "symbol"=>'€', "price" => 12.88, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 2, "type" => 'dolar', "symbol"=>'$', "price" => 12.00, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 3, "type" => 'euro',  "symbol"=>'€', "price" => 14.88, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 3, "type" => 'dolar', "symbol"=>'$', "price" => 14.00, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 4, "type" => 'euro',  "symbol"=>'€', "price" => 15.88, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 4, "type" => 'dolar', "symbol"=>'$', "price" => 15.00, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 5, "type" => 'euro',  "symbol"=>'€', "price" => 17.88, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 5, "type" => 'dolar', "symbol"=>'$', "price" => 17.88, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 6, "type" => 'euro',  "symbol"=>'€', "price" => 20.88, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 6, "type" => 'dolar', "symbol"=>'$', "price" => 20.00, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 7, "type" => 'euro',  "symbol"=>'€', "price" => 22.88, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 7, "type" => 'dolar', "symbol"=>'$', "price" => 22.00, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 8, "type" => 'euro',  "symbol"=>'€', "price" => 25.88, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
                ["product_id"  => 8, "type" => 'dolar', "symbol"=>'$', "price" => 25.00, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
            ];

        DB::table('product_prices')->delete();
        ProductPrice::insert($prices);
    }
}
