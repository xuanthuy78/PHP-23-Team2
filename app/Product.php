<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $table='products';

    protected $fillable=['name','price','quality','description','image','category_id'];


    public function category()
    {
    	return $this->belongsTo('App\Category', 'category_id', 'id');	
    }

    public function comments()
    {
    	return $this->hasMany('App\Comment', 'product_id', 'id');
    }

    public function technology()
    {
    	return $this->belongsTo('App\Technology', 'product_id', 'id');
    }
}
