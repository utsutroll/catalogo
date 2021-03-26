@extends('layouts.app')

@section('content')
<div class="container-fluid mt-3">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Detalle del Producto</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                    <li class="breadcrumb-item active">Detalle del Producto</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Info box Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="">{{$producto->nombre}}</h3>
                    <h6 class="card-subtitle">{{$producto->detalles}}</h6>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="white-box text-center"> <img src="../{{$producto->img}}" class="img-responsive"> </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-6">
                            <h4 class="box-title m-t-40">Descripción del producto</h4>
                            <p>Lorem Ipsum disponible, pero la mayoría ha sufrido alguna alteración, por humor inyectado, o palabras aleatorias que no parecen ni mínimamente creíbles. pero la mayoría ha sufrido alguna alteración, por humor inyectado</p>
                            <h2 class="m-t-40">153$ <small class="text-success">(36% de descuento)</small></h2>
                            <button class="btn btn-dark btn-rounded m-r-5" data-toggle="tooltip" title="" data-original-title="Añadir al carrito"><i class="ti-shopping-cart"></i> <button>
                            <button class="btn btn-primary btn-rounded">Comprar ahora </button>
                            <h3 class="box-title m-t-40">Los aspectos más destacados</h3>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check text-success"></i> Estructura robusta</li>
                                <li><i class="fa fa-check text-success"></i> Diseñado para fomentar una fácil portabilidad</li>
                                <li><i class="fa fa-check text-success"></i> Mueble perfecto para presumir de tus maravillosos objetos de colección</li>
                            </ul>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h3 class="box-title m-t-40">Información general</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td width="390">Marca</td>
                                            <td> Stellar </td>
                                        </tr>
                                        <tr>
                                            <td>Condición de entrega</td>
                                            <td> Derribo </td>
                                        </tr>
                                        <tr>
                                            <td>Bloqueo del asiento incluido</td>
                                            <td> Sí </td>
                                        </tr>
                                        <tr>
                                            <td>Tipo</td>
                                            <td>Silla de oficina</td>
                                        </tr>
                                        <tr>
                                            <td>Estilo</td>
                                            <td> Contemporáneo &amp; Moderno </td>
                                        </tr>
                                        <tr>
                                            <td>Ruedas incluidas</td>
                                            <td> Sí </td>
                                        </tr>
                                        <tr>
                                            <td>Tapicería incluida</td>
                                            <td> Sí </td>
                                        </tr>
                                        <tr>
                                            <td>Tipo de tapicería</td>
                                            <td> Cojín</td>
                                        </tr>
                                        <tr>
                                            <td>Soporte para la cabeza</td>
                                            <td> No </td>
                                        </tr>
                                        <tr>
                                            <td>Adecuado para</td>
                                            <td> Estudio y oficina en casa </td>
                                        </tr>
                                        <tr>
                                            <td>Altura ajustable</td>
                                            <td> Sí </td>
                                        </tr>
                                        <tr>
                                            <td>Número de modelo</td>
                                            <td> F01020701-00HT744A06 </td>
                                        </tr>
                                        <tr>
                                            <td>Respaldo incluido</td>
                                            <td> Sí </td>
                                        </tr>
                                        <tr>
                                            <td>Instrucciones de cuidado</td>
                                            <td> Manipular con cuidado, mantener en lugar seco, no aplicar ningún producto químico para la limpieza. </td>
                                        </tr>
                                        <tr>
                                            <td>Tipo de acabado</td>
                                            <td> Mate </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
</div>
@endsection
