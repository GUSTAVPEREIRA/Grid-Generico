<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;

class Category extends Model
{

    protected $table = 'categories';

    protected $fillable = [
      'name'
    ];

    public function products() {
      return $this->belongsToMany(Products::class);
    }
}
