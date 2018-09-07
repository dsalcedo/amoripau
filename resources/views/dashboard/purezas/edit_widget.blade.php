<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Formulario Pureza</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
{{Form::model($pureza,['route'=>['pureza.update',$pureza->id],'method'=>'put'])}}
<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label><b>Nombre:</b></label>
                {{Form::text('nombre',$pureza->nombre,['class'=>'form-control'])}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label><b>Apellido paterno:</b></label>
                {{Form::textArea('descripcion',$pureza->descripcion,['class'=>'form-control','rows'=>4])}}
            </div>
        </div>

    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</div>
{{Form::close()}}

