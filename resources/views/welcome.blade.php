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
    <div class="row page-titles">
        <div class="col col-md-9 col-lg-9 align-self-center row">
            <div class="col-1">
                <a data-toggle="collapse" href="#navbarCat" role="button" aria-expanded="false" aria-controls="navbarCat">
                    <i class="ti-menu text-dark"></i> 
                </a>
            </div>
            <div class="col-11 d-none d-sm-block">
                <h4 class="text-themecolor">Productos</h4>
            </div>
        </div>
                    
        <div class="col col-md-3 col-lg-3 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                    <li class="breadcrumb-item active">Productos</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Filtro -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="sidebar_bar collapse col-md-4 col-lg-3" id="navbarCat">
            <div class="card">
                <div class="card-body">  
                    <div class="sidebar_list">
                        <input type="text" id="search_box" class="form-control" placeholder="Buscar &hellip;" />
                    </div>
                    <hr/>
                    <div class="list-group">
                        <h3>Categorías</h3>
                        <ul class="pl-0" id="status" style="list-style:none;">
                            <li>
                                <div class="list-group-item checkbox">
                                    <label><input type="checkbox" value="all" id="all_status"> Todos</label>
                                </div>
                            </li>
                            @foreach ($categorias as $ca)
                            <li>
                                <div class="list-group-item checkbox">
                                    <label><input type="checkbox" value="{{$ca->categoria}}"  > {{$ca->categoria}}</label>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12" id="product">
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

    </div>

    <script id="template" type="text/html">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="product-img">
                        <img src="../<%= img %>">
                        <div class="pro-img-overlay"><a href="{{url('shoping-cart')}}" class="bg-success"><i class="ti-shopping-cart"></i></a> </div>
                    </div>
                    <div class="product-text">
                        <span class="pro-price bg-info">
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
    <style>
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

    $('#navbarCat').on('show.bs.collapse', function () {
        $('#product')
        .removeClass('col-12')
        .addClass('col-md-8 col-lg-9')
    })

    $('#navbarCat').on('hidden.bs.collapse', function () {
        $('#product')
        .removeClass('col-md-8 col-lg-9')
        .addClass('col-12')
    })
    </script>    
@endpush        
@endsection