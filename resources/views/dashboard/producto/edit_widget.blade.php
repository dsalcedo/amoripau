<div class="modal-header">
    <h5 class="modal-title" id="productoModalLabel">Formulario de producto</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
{{Form::model($producto,['route'=>['producto.update',$producto->id],'method'=>'put'])}}
<div class="modal-body">
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
        <div class="col-md-6">
            <div class="form-group">
                <label><b>Tipo Producto:</b></label>
                {{Form::select('tipo_producto_id',$tipo_productos,$producto->tipo_producto_id,['class'=>'form-control','required'])}}
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</div>
{{Form::close()}}

