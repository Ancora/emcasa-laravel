<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = \App\Store::all();

        // Adiciona um produto para cada loja já existente no banco
        /* foreach ($stores as $store) {
            $store->products()->save(factory(\App\Product::class)->make());
        } */

        // Adiciona 5 produtos para cada loja já existente no bano
        foreach ($stores as $store) {
            $products = factory(\App\Product::class, 5)->make();

            $store->products()->saveMany($products);
        }
    }
}
