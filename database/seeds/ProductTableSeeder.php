<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        ([ 
            'imagePath' =>'images\Banana Chips.jpg',
            'title' =>'St Mary Banana Chips',
            'description' =>'Jamaicas',
            'price' => 10 
        ]);
        $product->save();

        $product = new \App\Product();
        ([ 
            'imagePath' => 'images\Cheese Bread.jpg  ',
            'title' =>'Cheese Bread',
            'price' => 10 
        ]);
        $product->save();

        $product = new \App\Product();
        ([ 
            'imagePath' => 'images\Cheese Burger.jpg  ',
            'title' =>'Cheese Burger',
            'price' => 10 
        ]);
        $product->save();

        $product = new \App\Product();
        ([ 
            'imagePath' => 'images\Coco.jpg  ',
            'title' =>'Coco Bread',
            'price' => 10 
        ]);
        $product->save();

        $product = new \App\Product();
        ([ 
            'imagePath' => 'images\Carrot.jpg  ',
            'title' =>'Chips',
            'price' => 10 
        ]);
        $product->save();

        $product = new \App\Product();
        ([ 
            'imagePath' => 'images\Patty.jpg  ',
            'title' =>'Any Patty',
            'price' => 10 
        ]);
        $product->save();
    
    }
}
