<div class="form-group">
	{{ Form::label('name', 'Nombre del Estado Envio') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('description', 'Descripcion del Estado Envio') }}
	{{ Form::text('description', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>