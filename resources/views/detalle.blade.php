@extends('layouts.dashboard')

@section('css')
@endsection

@section('content')

    <br>
    <div class="page-content container-fluid">
        <div class="row-fluid">
            <div class="col-md-12" >
                <div class="widget">

                    <div class="widget-body">
                        <div class="row">
                            <div class="col-md-8" >
                                <div class="row-fluid">
                                    <div class="col-md-12">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="">
                                            <div class="carousel-inner" style="height: 250px; width: 100%;">
                                                <h4 class="mt-0 mb-5"> {{$producto->nombre}}</h4>
                                                @foreach($producto->imagenes as $index => $imagen)
                                                    <div class="carousel-item @if($index == 0) active @endif" >
                                                        <img class="gear" src="{{asset('img/'.$imagen->ruta)}}"alt="img-responsive" style="width: 100%; height: 100%;">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <!--a class="carousel-control-prev btn" href="#carouselExampleControls" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a-->
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="height: 40px; margin-top: 10px;">
                                        <div class="row" >
                                            <div class="col-md-12" style="align-content: center;">
                                                <center>
                                                    <button class="btn " href="#carouselExampleControls" role="button" data-slide="prev" style="height: 40px; width: 40px; background-color: #E22380;;">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </button>
                                                    <button class="btn  -pull-right" href="#carouselExampleControls" role="button" data-slide="next" style="height: 40px;width: 40px; background-color: #E22380;">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <h4 class="text-muted mb-0" align=""center                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   >Detalles</h4><br>
                                {{Form::model($producto,['route'=>['producto.update',$producto->id],'method'=>'put'])}}
                                <div class="row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>Nombre:</b></label>
                                                <label>{{$producto->nombre}}</label>

                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>Modelo:</b></label>
                                                <label>{{$producto->modelo}}</label>

                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>Cantidad:</b></label>
                                                <label>{{$producto->cantidad}}</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>Precio:</b></label>
                                                <label>{{$producto->precio}}</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>Pureza:</b></label>
                                            <label>{{$producto->pureza->nombre}}</label>
                                        </div>
                                    </div>
                                        <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>Promocion:</b></label>
                                            <label>{{$producto->promocion->nombre}}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><b>Tipo Producto:</b></label>
                                            <label>{{$producto->tipoProducto->nombre}}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary">Agregar</button>
                                    </div>
                                </div>
                                {{Form::close()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('Footer')
@endsection

@section('javascript')
@endsection
