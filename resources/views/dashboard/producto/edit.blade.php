@extends('dashboard.layout.dashboard')
<style>
    .uploader {
        border: 1px solid #ccc;
        width: 300px;
        position: relative;
        height: 30px;
        display: flex;
    }
    .uploader .input-value{
        width: 250px;
        padding: 5px;
        overflow: hidden;
        text-overflow: ellipsis;
        background: #c3e3fc;
    }
    .uploader label {
        cursor: pointer;
        margin: 0;
        width: 30px;
        height: 30px;
        position: absolute;
        right: 0;
        background: #c3e3fc;
    }


</style>

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
                        <div class="row">
                            <div class="col-md-4" >
                                <div class="row-fluid">
                                    <div class="col-md-12">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="">
                                            <div class="carousel-inner" style="height: 350px; width: 100%;">
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
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        {{Form::open(['route'=>'producto.imageStore', 'files' => true])}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{Form::file('imagen',['class'=>'btn border', 'id'=>"imagen"])}}
                                                {{Form::hidden('producto_id',$producto->id,['class'=>'form-control'])}}
                                            </div>
                                            <div class="col-md-12" style="margin-top: 10px;">
                                                <button class="btn btn-success">Guardar imagen</button>
                                            </div>
                                        </div>
                                        {{Form::close()}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                {{Form::model($producto,['route'=>['producto.update',$producto->id],'method'=>'put'])}}
                                <div class="row">
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


    <script type="text/javascript">
        $(document).ready(function()
        {
            $(".gear").mlens(
                {
                    imgSrc: $(".gear").attr("data-big"),	  // path of the hi-res version of the image
                    imgSrc2x: $(".gear").attr("data-big2x"),  // path of the hi-res @2x version of the image
                                                              //for retina displays (optional)
                    lensShape: "square",                // shape of the lens (circle/square)
                    lensSize: ["50%","55%"],            // lens dimensions (in px or in % with respect to image dimensions)
                                                        // can be different for X and Y dimension
                    borderSize: 4,                  // size of the lens border (in px)
                    borderColor: "#fff",            // color of the lens border (#hex)
                    borderRadius: 0,                // border radius (optional, only if the shape is square)
                    imgOverlay: $(".gear").attr("data-overlay"), // path of the overlay image (optional)
                    overlayAdapt: true,    // true if the overlay image has to adapt to the lens size (boolean)
                    zoomLevel: 1,          // zoom level multiplicator (number)
                    responsive: true       // true if mlens has to be responsive (boolean)
                });
        });
    </script>
@endsection


