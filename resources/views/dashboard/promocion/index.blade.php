@extends('dashboard.layout.dashboard')


@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="mt-0 mb-5">Promociones</h4>
            </div>
        </div>
    </div>
    <br>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12" >
                <div class="widget">
                    <div class="widget-heading">
                        <h3>Promociones</h3>
                    </div>
                    <div class="widget-body">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success" data-toggle="modal" data-target="#modalPromociones">Registrar Promocion</button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table-bordered" width="100%">
                                        <thead>
                                        <tr>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Descipcion</th>
                                            <th class="text-center">Descuento</th>
                                            <th class="text-center">Opciones:</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($promocion as $promo)
                                            <tr>
                                                <td class="text-center">{{$promo->nombre}}</td>
                                                <td class="text-center">{{$promo->descripcion}}</td>
                                                <td class="text-center">{{$promo->descuento}} %</td>
                                                <td class="text-center">
                                                    <div>
                                                        <button class="btn btn-danger eliminar" data-id="{{$promo->id}}"><i class="fas fa-trash-alt"></i></button>
                                                        <button type="button" class="btn btn-primary modal-widget" data-toggle="modal" data-target="#promocionEditModal" data-url="{{$promo->widget_edit}}"><i class="fas fa-pencil-alt"></i></button>
                                                    </div>
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

    <div class="modal fade" id="modalPromociones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="promocionModalLabel">Formulario promocion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{Form::open(['route'=>'promocion.store'])}}
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
                                <label><b>Descripción:</b></label>
                                {{Form::textArea('descripcion',null,['class'=>'form-control','rows'=>4])}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label><b>Descuento %:</b></label>
                                {{Form::number('descuento',null,['class'=>'form-control','required'])}}
                            </div>
                        </div>
                        {{--}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label><b>Multiplicando:</b></label>
                                {{Form::number('multiplicando',null,['class'=>'form-control','required'])}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label><b>Multiplicador:</b></label>
                                {{Form::number('multiplicador',null,['class'=>'form-control','required'])}}
                            </div>
                        </div>
                        {{--}}
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

    <div class="modal fade" id="promocionEditModal" tabindex="-1" role="dialog" aria-labelledby="promocionEditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).on('click', '.modal-widget', function (e) {
            $('#promocionEditModal .modal-content').empty();
            $('#promocionEditModal .modal-content').load($(this).data('url'));
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
        @if(session()->has('Eliminado'))
        swal("Se elimino exitosamente la promoción!", "", "success");
        @endif
    </script>
    <script>
        $(document).on('click', '.eliminar', function (e) {
           var id = $(this).data('id');
           var url = "{{route('promocion.eliminar','id')}}";
            url = url.replace('id', id);
            console.log(url);
            swal("¿estas seguro de querer eliminar la promoción?", " ", "warning", {
                buttons: {
                    cancel: "Cancelar",
                    eliminar: "Eliminar",
                },
            })
                .then((value) => {
                    if (value == "eliminar"){
                        window.location = url;
                    }
                });
        });
    </script>
@endsection
