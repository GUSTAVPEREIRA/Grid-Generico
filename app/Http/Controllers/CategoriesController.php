<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table\Table;
use App\Category;


class CategoriesController extends Controller
{

    private $table;

    public function __construct(Table $table)
    {
        $this->table = $table;
    }

    public function index()
    {
      dd($this->table->model(Category::class)->search()->rows());
    }
}
