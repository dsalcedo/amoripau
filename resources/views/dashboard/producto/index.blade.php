@extends('dashboard.layout.dashboard')


@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="mt-0 mb-5">Productos</h4>
            </div>
        </div>
    </div>
    <br>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12" >
                <div class="widget">
                    <div class="widget-heading">
                        <h3>Productos</h3>
                    </div>
                    <div class="widget-body">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success" data-toggle="modal" data-target="#modalProductos">Registrar Producto</button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table-bordered" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Modelo</th>
                                            <th>Cantidad disponible</th>
                                            <th>Precio por unidad</th>
                                            <th>Pureza</th>
                                            <th>Promoción</th>
                                            <th>Tipo Producto</th>
                                            <th>Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($productos as $producto)
                                            <tr>
                                                <td>{{$producto->nombre}}</td>
                                                <td>{{$producto->modelo}}</td>
                                                <td>{{$producto->cantidad}}</td>
                                                <td>{{$producto->precio}}</td>
                                                <td>{{$producto->pureza->nombre}}</td>
                                                <td>{{$producto->promocion->nombre}}</td>
                                                <td>{{$producto->tipoProducto->nombre}}</td>
                                                <td>
                                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                    <button type="button" class="btn btn-primary modal-widget" data-toggle="modal" data-target="#productoEditModal" data-url="{{$producto->widget_edit}}"><i class="fas fa-pencil-alt"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalProductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productoModalLabel">Formulario producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{Form::open(['route'=>'producto.store'])}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label><b>Nombre:</b></label>
                                {{Form::text('nombre',null,['class'=>'form-control','required'])}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label><b>Modelo:</b></label>
                                {{Form::text('modelo',null,['class'=>'form-control','required'])}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label><b>Cantidad:</b></label>
                                {{Form::number('cantidad',null,['class'=>'form-control','required'])}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label><b>Precio:</b></label>
                                {{Form::number('precio',null,['class'=>'form-control','required'])}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label><b>Pureza:</b></label>
                                {{Form::select('purezas_id',$purezas,null,['class'=>'form-control','required'])}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label><b>Promocion:</b></label>
                                {{Form::select('promocion_id',$promocion,null,['class'=>'form-control','required'])}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label><b>Tipo Producto:</b></label>
                                {{Form::select('tipo_producto_id',$tipo_producto,null,['class'=>'form-control','required'])}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>

    <div class="modal fade" id="productoEditModal" tabindex="-1" role="dialog" aria-labelledby="productoEditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).on('click', '.modal-widget', function (e) {
            $('#productoEditModal .modal-content').empty();
            $('#productoEditModal .modal-content').load($(this).data('url'));
        });
    </script>
    <script>
        $('.input-group.date').datepicker({
            orientation: "bottom auto",
            language: "es",
        });
    </script>

    <script>
        @if(session()->has('registro'))
        swal("El registro fue exitoso!", "", "success");
        @endif
        @if(session()->has('update'))
        swal("Se modificarón exitosamente los datos!", "", "success");
        @endif
    </script>
@endsection

