<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';

    protected $primaryKey='idproducto';

    public $timestamps=false;

    protected $fillable=[
    	'nombre',
    	'detalles',
    	'id_categoria',
    	'img',
    	'precio'
    ];

    protected $guarded=[

    ];

    public function categoria() {

        return $this->belongsTo('App\Categoria', 'id_categoria', 'idcategoria');
    }
}
