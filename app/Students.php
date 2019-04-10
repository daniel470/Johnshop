<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $fillable= ['Fname',  'Lname',  'ID#', 'location',  'otherdetails'];





    public function students()
    {
        return $this->hasMany('App\Order');
    }
}
