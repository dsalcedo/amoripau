@extends('dashboard.layout.dashboard')


@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h4 align="center">Listado de productos</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
           <div class="table-responsive">
               <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Clave</th>
                            <th>Modelo</th>
                            <th>Cantidad disponible</th>
                            <th>Precio por unidad</th>
                            <th>Pureza</th>
                            <th>Promoción</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->clave}}</td>
                                <td>{{$producto->modelo}}</td>
                                <td>{{$producto->cantidad}}</td>
                                <td>{{$producto->precio}}</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    <button type="button" class="btn btn-primary modal-widget" data-toggle="modal" data-target="#empleadoEditModal" data-url=""><i class="fas fa-pencil-alt"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
               </table>
           </div>

        </div>
    </div>
@endsection

@section('javascript')

@endsection



            <tr>
                <td>1</td>
                <td>Anna</td>
                <td>Pitt</td>
                <td>35</td>
                <td>New York</td>
                <td>USA</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
