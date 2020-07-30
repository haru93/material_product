<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App\Material;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Material::find(1)->stocks;
        // dd($stocks);

        $material = Stock::find(1)->material->name;
        // dd($material);
    }
}
