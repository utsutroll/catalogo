@extends('layouts.app')

@section('content')
<div class="container-fluid mt-3">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Compra de Productos</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                    <li class="breadcrumb-item active">Compra de Productos</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Table -->
    <!-- ============================================================== -->
     <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resumen del producto</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="../assets/images/gallery/chair.jpg" alt="iMac" width="80"></td>
                                    <td>Silla redonda</td>
                                    <td>20</td>
                                    <td class="font-500">153 dólares</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="font-500" align="right">Importe total</td>
                                    <td class="font-500">153$</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Elige una opción de pago</h5>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="nav-item">
                                    <a href="#bbanesco" class="nav-link text-dark active" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                                        <span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Banesco</span>
                                    </a>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <a href="#bprovincial" class="nav-link text-dark" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                                        <span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Provincial</span>
                                    </a>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <a href="#pmovil" class="nav-link text-dark" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                                        <span class="visible-xs"><i class="ti-mobile"></i></span><span class="hidden-xs"> Pago Móvil</span>
                                    </a>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <a href="#ihome" class="nav-link text-dark" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="ti-user"></i></span> 
                                        <span class="hidden-xs">Paypal</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane" id="ihome">
                                    <br/>Puedes pagar tu dinero a través de paypal, para más información <a href="">haz clic aquí</a>
                                    <br>
                                    <br>
                                    <button class="btn btn-info"><i class="fa fa-cc-paypal"></i> Paga con Paypal</button>
                                </div>
                                <div role="tabpanel" class="tab-pane active" id="bbanesco">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="card-title m-t-30">Información general</h4>
                                            <p><strong>Beneficiario: José Perez</strong></p>
                                            <p><strong>Cedula: </strong>12.345.678</p>
                                            <p><strong>Nro. de Cuenta: </strong>1234-567891-012345-6789</p>
                                            <p><strong>Tipo de Cuenta:</strong>Corriente</p>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="bprovincial">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="card-title m-t-30">Información general</h4>
                                            <p><strong>Beneficiario: José Perez</strong></p>
                                            <p><strong>Cedula: </strong>12.345.678</p>
                                            <p><strong>Nro. de Cuenta: </strong>1234-567891-012345-6789</p>
                                            <p><strong>Tipo de Cuenta:</strong>Corriente</p>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="pmovil">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="card-title m-t-30">Información general</h4>
                                            <p><strong>Banco:</strong>Banesco</p>
                                            <p><strong>Cedula: </strong>12.345.678</p>
                                            <p><strong>Nro. Celular: </strong>(0123)-4567-890</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <hr class="d-md-none d-lg-none">
                            <h5 class="card-title">Proporcione la Información Solicitada</h5>
                            <form action="" method="post" class="form-material">
                                <div class="card">
                                    <div class="card-body">
                                        <label for="input-file-now">Agregue la Captura de la Trasnferencia o Pago Móvil</label>
                                        <input type="file" id="input-file-now" class="dropify" required/>

                                        <div class="form-group mt-3">
                                            <label for="referencia">Nro. de Referencia</label>
                                            <input type="numeric" name="referencia" id="referencia" class="form-control" placeholder="Ingrese el Nro. Referencia" required>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success">Comprobar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('upload_css')
    <link rel="stylesheet" href="{{url('/assets/node_modules/dropify/dist/css/dropify.min.css')}}">   
@endpush
@push('upload_s')
    <!-- jQuery file upload -->
    <script src="{{url('/assets/node_modules/dropify/dist/js/dropify.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify({
                messages: {
                    default: 'Arrastre y suelte un archivo aquí o haga clic en',
                    replace: 'Arrastre y suelte un archivo o haga clic para sustituirlo',
                    remove: 'Eliminar',
                    error: 'Lo siento, el archivo es demasiado pesado'
                }
            });
        });
    </script>
@endpush
@endsection
