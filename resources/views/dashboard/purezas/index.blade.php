@extends('dashboard.layout.dashboard')


@section('content')
    <div class="page-header clearfix">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="mt-0 mb-5">Pureza</h4>
            </div>
        </div>
    </div>
    <br>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12" >
                <div class="widget">
                    <div class="widget-heading">
                        <h3>Purezas</h3>
                    </div>
                    <div class="widget-body">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success" data-toggle="modal" data-target="#modalPureza">Registrar Pureza</button>
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
                                            <th class="text-center">Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($purezas as $pureza)
                                            <tr>
                                                <td class="text-center">{{$pureza->nombre}}</td>
                                                <td class="text-center">{{$pureza->descripcion}}</td>
                                                <td class="text-center">
                                                    <div>
                                                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                        <button type="button" class="btn btn-primary modal-widget" data-toggle="modal" data-target="#purezaEditModal" data-url="{{$pureza->widget_edit}}"><i class="fas fa-pencil-alt"></i></button>
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

    <div class="modal fade" id="modalPureza" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario de pureza</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{Form::open(['route'=>'purezas.store'])}}
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

    <div class="modal fade" id="purezaEditModal" tabindex="-1" role="dialog" aria-labelledby="purezaEditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).on('click', '.modal-widget', function (e) {
            $('#purezaEditModal .modal-content').empty();
            $('#purezaEditModal .modal-content').load($(this).data('url'));
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
