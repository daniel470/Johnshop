<?php

namespace App\Repos\Eloquent;
use App\Product;
use App\Contracts\Repos\IProductRepository;


 class ProductRepository implements IProductRepository{

    public function get($id){

        return Product::find($id);
    }

 }