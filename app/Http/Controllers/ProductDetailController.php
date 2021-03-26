<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        //$producto = Producto::findOrFail($producto->idproducto);

        return view('product-detail', ["producto" => Producto::findOrFail($id)]);
    }
}
