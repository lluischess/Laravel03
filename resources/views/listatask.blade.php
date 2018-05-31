@extends('layouts.app')
@section('header')
<h2>Lista de Tareas</h2>
@stop
@section('content')

@foreach ($task as $taskmodel)
	<div class="task">
		<a href="{{ url('llibres') }}">
			<strong>{{ $taskmodel->objetivo}}</strong>
		</a>
	</div>
@endforeach

@stop