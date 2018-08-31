<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Formulario de Empleado</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
{{Form::model($empleado,['route'=>['empleado.update',$empleado->id],'method'=>'put'])}}
<div class="modal-body">
    <div class="col-md-12">
        <div class="form-group">
            <label><b>Nombre:</b></label>
            {{Form::text('nombre',$empleado->nombre,['class'=>'form-control','required'])}}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label><b>Email:</b></label>
            {{Form::text('email',$empleado->email,['class'=>'form-control','required'])}}
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</div>
{{Form::close()}}
