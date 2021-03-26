<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;
use App\Producto;

class CatalogoController extends Controller
{

    public function index()
    {
        $productos = Producto::orderBy('idproducto', 'desc')->paginate(30);
        $categorias = Categoria::orderBy('categoria', 'desc')->get();
        return view('welcome',["productos" => $productos, "categorias" => $categorias]);
    }

    public function shoping_cart()
    {

        return view('shoping-cart');
    }

    public function product_detail()
    {
        return view('product_detail');
    }
}
