<div class="modal-header">
    <h5 class="modal-title" id="promocionModalLabel">Formulario de promocion</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
{{Form::model($promocion,['route'=>['promocion.update',$promocion->id],'method'=>'put'])}}
<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label><b>Nombre:</b></label>
                {{Form::text('nombre',$promocion->nombre,['class'=>'form-control'])}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label><b>Descripcion</b></label>
                {{Form::textArea('descripcion',$promocion->descripcion,['class'=>'form-control','rows'=>4])}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label><b>Multiplicando:</b></label>
                {{Form::text('multiplicando',$promocion->multiplicando,['class'=>'form-control'])}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label><b>Multiplicador:</b></label>
                {{Form::text('multiplicador',$promocion->multiplicador,['class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</div>
{{Form::close()}}

