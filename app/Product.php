<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name','description','sale_price','price','active','imagem'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'products';
}
