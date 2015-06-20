<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $numberUsers = 20;
        $numberCarts = 120;
        $numberMerchants = 15;
        $numberProducts = 200;

        factory('App\User', $numberUsers)->create();
        factory('App\Profile', $numberUsers)->create();
        factory('App\Cart', $numberCarts)->create();
        factory('App\Product', $numberProducts)->create();
        factory('App\Merchant', $numberMerchants)->create();
        factory('App\Product_link', 300)->create();
        factory('App\Active_product', $numberProducts)->create();
        factory('App\Profile_follower', 200)->create();
        factory('App\Carts_follower', 200)->create();

        Model::reguard();
    }
}
