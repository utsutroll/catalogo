@extends('layouts.app')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>La Mega Tienda Turén</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-rounded" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                    @endif

                    <h4>Te damos la Bienvenida. Para continuar con tu compra haga<a href="/" class="btn btn-link"> Click aquí. <i class="fa fa-link"></i></a></h4> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
