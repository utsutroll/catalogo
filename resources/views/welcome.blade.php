@extends('layouts.app')

@section('content')
<div class="content">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../assets/images/slider.jpg" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
              <h3 style="font-size:2vw;">Los Angeles</h3>
              <p class="m-auto" style="font-size:1vw;">We had such a great time in LA!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="../assets/images/slider.jpg" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
              <h3 style="font-size:2vw;">Chicago</h3>
              <p class="m-auto" style="font-size:1vw;">Thank you, Chicago!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="../assets/images/slider.jpg" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
              <h3 style="font-size:2vw;">New York</h3>
              <p class="m-auto" style="font-size:1vw;">We love the Big Apple!</p>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
</div>
        
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-titles d-flex justify-content-center">
        <div class="form-material">
            <div class="input-group mb3">
                <div class="input-group-prepend">
                    <button type="button" class="btn btn-white dropdown-toggle mr-1 border-secondary border-top-0 border-left-0 border-right-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ti-filter"></i> Filtrar por
                    </button>
                    <div class="dropdown-menu" id="status">
                        <div class="dropdown-item disabled">Categorías</div>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-item checkbox">
                            <label><input type="checkbox" value="all" id="all_status"> Todos</label>
                        </div>
                            
                            @foreach ($categorias as $ca)
                            
                                <div class="dropdown-item checkbox">
                                    <label><input type="checkbox" value="{{$ca->categoria}}"  > {{$ca->categoria}}</label>
                                </div>
                            
                            @endforeach
                        </ul>
                    </div>
                </div>
                <input type="text" id="search_box" class="form-control" placeholder="Buscar &hellip;" />
            </div>                
        </div>                   
    </div>
    <div class="row">
    <div class="col-12" id="carrusel">
        <a href="#" class="left-arrow"><i class="fa fa-angle-left fa-3x"></i></a>
        <a href="#" class="right-arrow"><i class="fa fa-angle-right fa-3x"></i></a>
        <h4>Productos en Oferta</h4>
        <div class="carrusel">
            {{$n=0}}
            @foreach ($productos as $p)
            <div class="products" id="product_{{$n++}}" style="font-family: 'Roboto', sans-serif;">
                <div class="img-sli">
                    <img src="../{{$p->img}}" width="70%" />
                </div>
                
                <div class="nombre">
                    <a href="/product-detail/{{$p->idproducto}}">{{$p->nombre}}</a>
                </div>
                <span class="badge badge-pill badge-dark">{{$p->precio}} $</span> 
            </div>
            @endforeach
        </div>
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Filtro -->
    <!-- ============================================================== -->
    
        <div id="product">
            <div class="featured_services_find">
                <div class="featured_list_find row" id="service_list"></div>
            </div>
        </div> 
        <script>
            //<![CDATA[
            var services = [
            @foreach ($productos as $p){
                "name": "{{$p->nombre}}",
                "img": "{{$p->img}}",
                "amount": {{$p->precio}},
                "vef": {{$p->precio * 1865403}},
                "status": "{{$p->categoria['categoria']}}",
                "id": {{$p->idproducto}},
            },
            @endforeach
            ];
                    
            //]]>
        </script> 
        <div class="clear"></div>

        <div class="d-flex justify-content-end mt-4">
            {{$productos->links()}}
        </div> 


    <script id="template" type="text/html">
        <!-- Column -->
        <div class="col-3">
            <div class="card shadow-sm p-3">
                <div class="card-body">
                    <div class="product-img">
                        <img class="img-fluid" src="../<%= img %>">
                        <div class="pro-img-overlay"><a href="{{url('shoping-cart')}}" class="bg-success"><i class="ti-shopping-cart"></i></a> </div>
                    </div>
                    <div class="product-text">
                        <span class="pro-price bg-dark">
                            <div class="tooltip-ex"><strong><%= amount %>$</strong><br>
                                <span class="tooltip-ex-text tooltip-ex-top"><%= vef %> Bs.F</span>
                            </div>
                                
                        </span>
                        <a href="/product-detail/<%= id %>" class="text-dark"><h5 class="card-title m-b-0"><%= name %></h5></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Column -->     
    </script>
    <!-- ============================================================== -->
    <!-- End Filtro -->
    <!-- ============================================================== -->
</div>            
@push('css_select2')
    <link href="../assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="dist/css/filter.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="dist/css/carrusel.css">
    <style>
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        .nombre{
            padding: 10px 10px 5px;
            position: relative;
        }
        .cart-sli{
            padding: 15px;
            border-radius: 25px;
        }
        .tooltip-ex { /* Container for our tooltip */
            position: relative;
            display: inline-block;
            cursor: help;
            /* color: #8512d5;
            margin-right: 20px; */
            display: inline-block;
            float: center;
        }

        .tooltip-ex-top {
            bottom: 180%;
            left: 50%;
            margin-left: -60px;
        }

        .tooltip-ex-text {
            visibility: hidden;
            position: absolute;
            width: 120px;
            background-color: #555;
            color: #fff;
            text-align: center;
            padding: 5px 0;
            border-radius: 6px;
            z-index: 1;
            opacity: 0;
            transition: opacity .6s;
        }

        .tooltip-ex:hover .tooltip-ex-text { /* Makes tooltip visible when hovered on */
            visibility: visible;
            opacity: 1;
        }

        .tooltip-ex .tooltip-ex-text::after {
            content: " ";
            position: absolute;
            top: 100%; /* At the bottom of the tooltip */
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }
    </style>         
    @endpush
@push('scripts_select2') 
    <script src="dist/js/jquery-ui-1.10.2.custom.min.js" type="text/javascript"></script>
    <script src="../assets/node_modules/filter/dist/filter.js" type="text/javascript"></script>   
    <!-- Select2 -->
    <script src="../assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="../assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script> 
    <script src="dist/js/carrusel.js" type="text/javascript"></script> 
    <script>

        $('.select2').select2();    
        

        FilterJS(services, "#service_list", {
            template: '#template',
            criterias:[
            {field: 'amount', ele: '#price_filter', type: 'range'},
            {field: 'status', ele: '#status :checkbox'}
            ],

            search: { ele: '#search_box' }  
        });  
        $('#status :checkbox').prop('checked', true);
        $('#all_status').on('click', function(){
            $('#status :checkbox').prop('checked', $(this).is(':checked'));
        });  
    </script>    
@endpush        
@endsection