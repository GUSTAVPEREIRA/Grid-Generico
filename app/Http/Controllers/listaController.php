<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listaController extends Controller
{
    public function index(){



      $item = [
        'Name' => 'Indiano',
        'Position' => 'Arrombado',
        'Office' => 'Consegue',
        'Age' => 'Complicar',
        'Start_date' => 'Bagulho',
        'Salary' => 'Fácil'
      ];

      $item2 = [
        'Name' => 'Maldito',
        'Position' => 'Seja',
        'Office' => 'O',
        'Age' => 'Código',
        'Start_date' => 'Indiano',
        'Salary' => 'Porra'
      ];

      $item3 = [
        'Name' => 'teste',
        'Position' => 'teste',
        'Office' => 'O',
        'Age' => 'Código',
        'Start_date' => 'Indiano',
        'Salary' => 'Porra'
      ];


      $listaItem[] = $item;
      array_push($listaItem, $item);
      array_push($listaItem, $item2);
      array_push($listaItem, $item);
      array_push($listaItem, $item2);
      array_push($listaItem, $item);
      array_push($listaItem, $item2);
      array_push($listaItem, $item);
      array_push($listaItem, $item2);
      array_push($listaItem, $item);
      array_push($listaItem, $item2);
      array_push($listaItem, $item);
      array_push($listaItem, $item2);
      array_push($listaItem, $item);
      array_push($listaItem, $item2);
      array_push($listaItem, $item);
      array_push($listaItem, $item2);
      array_push($listaItem, $item);
      array_push($listaItem, $item2);
      array_push($listaItem, $item);
      array_push($listaItem, $item2);
      array_push($listaItem, $item);
      array_push($listaItem, $item2);
      array_push($listaItem, $item);
      array_push($listaItem, $item2);
      array_push($listaItem, $item3);
      array_push($listaItem, $item);
      array_push($listaItem, $item2);


      return view('lista', ['items' => $listaItem]);
    }
}
