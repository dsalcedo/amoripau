@extends('dashboard.layout.dashboard')


@section('content')
    <div class="page-header clearfix">
        <div class="row-fluid">
            <div class="col-sm-12">
                <h4 class="mt-0 mb-5">Edición del producto {{$producto->nombre}}</h4>
                <p class="text-muted mb-0">Edición</p>
            </div>
        </div>
    </div>
    <br>
    <div class="page-content container-fluid">
        <div class="row-fluid">
            <div class="col-md-12" >
                <div class="widget">
                    <div class="widget-heading">
                        <h3>Inicio</h3>
                    </div>
                    <div class="widget-body">
                        <div class="row-fluid">
                            <div class="col-md-4" >
                                <div class="row-fluid">
                                    <div class="col-md-12">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 300px; width: 400px;">
                                            <div class="carousel-inner">
                                                    @foreach($producto->imagenes as $index => $imagen)
                                                        <div class="carousel-item @if($index == 0) active @endif" >
                                                            <img class="item-img" src="{{asset($imagen->ruta)}}"alt="img-responsive" style="width: 100%; height: 100%;">
                                                        </div>
                                                    @endforeach
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>


                                    </div>
                                    <div class="col-md-12">
                                        {{Form::open(['route'=>'producto.imageStore', 'files' => true])}}
                                        <div class="row-fluid">
                                            <div class="col-md-12">
                                                {{Form::file('imagen',null,['class'=>'form-control'])}}
                                                {{Form::hidden('producto_id',$producto->id,['class'=>'form-control'])}}
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-success">Guardar imagen</button>
                                            </div>
                                        </div>
                                        {{Form::close()}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                {{Form::model($producto,['route'=>['producto.update',$producto->id],'method'=>'put'])}}
                                <div class="row-fluid">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>Nombre:</b></label>
                                            {{Form::text('nombre',$producto->nombre,['class'=>'form-control'])}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>Modelo:</b></label>
                                            {{Form::text('modelo',$producto->modelo,['class'=>'form-control'])}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>Cantidad:</b></label>
                                            {{Form::number('cantidad',$producto->cantidad,['class'=>'form-control','required'])}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>Precio:</b></label>
                                            {{Form::number('precio',$producto->precio,['class'=>'form-control','required'])}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>Pureza:</b></label>
                                            {{Form::select('purezas_id',$purezas,$producto->pureza_id,['class'=>'form-control','required'])}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>Promocion:</b></label>
                                            {{Form::select('promocion_id',$promociones,$producto->promocion_id,['class'=>'form-control','required'])}}
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><b>Tipo Producto:</b></label>
                                            {{Form::select('tipo_producto_id',$tipo_productos,$producto->tipo_producto_id,['class'=>'form-control','required'])}}
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
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
@section('javascript')
    <script>
        $(".item-img").elevateZoom();
    </script>
@endsection


