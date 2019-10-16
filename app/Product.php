<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Product extends Model
{

  protected $table = 'products';

  protected $fillable = [
    'name',
    'price'
  ];

  public function categories()
  {
    return $this->belongsToMany(Category::class);
  }
}
