@extends('layouts.master')
@section('titlePage')
Llibres
@stop
@section('header')
<h2>Lista de libros</h2>
@stop
@section('content')

<h3>Gestion de libros</h3>

@foreach ($llibres as $llibre)
	<div class="llibre">
		<a href="{{ url('llibres/'.$llibre->id) }}">
			<strong>{{ $llibre->titol}}</strong>
		</a>
	</div>
@endforeach

@stop