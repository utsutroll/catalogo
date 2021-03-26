@extends('layouts.app')

@section('content')
<div class="container-fluid mt-3">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Carrito de Compras</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                    <li class="breadcrumb-item active">Carrito de Compras</li>
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
        <div class="col-md-9 col-lg-9">
            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="m-b-0 text-white">Su carro de la compra (4 artículos)</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table product-overview">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Información del producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th style="text-align:center">Total</th>
                                    <th style="text-align:center">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="150"><img src="../assets/images/gallery/chair.jpg" alt="iMac" width="80"></td>
                                    <td width="550">
                                        <h5 class="font-500">Rounded Chair</h5>
                                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                                    </td>
                                    <td>$153</td>
                                    <td width="70">
                                        <input type="text" class="form-control" placeholder="1">
                                    </td>
                                    <td width="150" align="center" class="font-500">$153</td>
                                    <td align="center"><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="../assets/images/gallery/chair2.jpg" alt="iMac" width="80"></td>
                                    <td>
                                        <h5 class="font-500">Rounded Chair</h5>
                                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                                    </td>
                                    <td>$153</td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="1">
                                    </td>
                                    <td class="font-500" align="center">$153</td>
                                    <td align="center"><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="../assets/images/gallery/chair3.jpg" alt="iMac" width="80"></td>
                                    <td>
                                        <h5 class="font-500">Rounded Chair</h5>
                                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                                    </td>
                                    <td>$153</td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="1">
                                    </td>
                                    <td class="font-500" align="center">$153</td>
                                    <td align="center"><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                </tr>
                                <tr>
                                    <td><img src="../assets/images/gallery/chair4.jpg" alt="iMac" width="80"></td>
                                    <td>
                                        <h5 class="font-500">Rounded Chair</h5>
                                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                                    </td>
                                    <td>$153</td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="1">
                                    </td>
                                    <td class="font-500" align="center">$153</td>
                                    <td align="center"><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <a href="{{url('products-checkout')}}"> <button class="btn btn-danger pull-right"><i class="fa fa fa-shopping-cart"></i> Pagar</button></a>
                        <a href="/"> <button class="btn btn-dark btn-outline"><i class="fa fa-arrow-left"></i> Continuar comprando</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-3 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resumen del carro</h5>
                    <hr>
                    <small>Precio total</small>
                    <h2>612 dólares</h2>
                    <hr>
                    <a href="{{url('products-checkout')}}"><button class="btn btn-success">Comprar</button></a>
                    <button class="btn btn-secondary btn-outline">Cancelar</button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Para cualquier ayuda</h5>
                    <hr>
                    <h4><i class="ti-mobile"></i> 9998979695</h4> <small>Por favor, contacte con nosotros si tiene alguna duda. Estamos disponibles las 24 horas del día.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
