@extends('layouts.app')
@section('header')
	<h2>Crea una tarea</h2>
@stop
@section('content')
	{!! Form::open(array('url'=>'/task'))!!}
	<h3>Formulario</h3>
	<div class="form-group">
		{!! Form::label('lbltitol','Titol')!!}
		<div class="form-controls">
			{!! Form::text('objetivo',null, ['class' => 'form-control'])!!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('fecha','Fecha de finalización')!!}
		<div class="form-controls">
			{!! Form::date('fecha',null, ['class' => 'form-control'])!!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('usuario','Usuario encargado')!!}
		<div class="form-controls">
			{!! Form::text('usuario',null, ['class' => 'form-control'])!!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('estado','Estado de la tarea')!!}
		<div class="form-controls">
			{!! Form::text('estado',null, ['class' => 'form-control'])!!}
		</div>
	</div>
	</div>
	{!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
	{!! Form::close() !!}
@stop