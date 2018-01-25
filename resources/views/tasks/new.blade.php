@extends('layouts.app')

@section('content')
	<div class="container">
		@include('alerts.errors')

		{!! Form::open(['route' => 'task.store', 'method' => 'POST']) !!}
		
			@include('tasks.form')

			{!! Form::submit('Almacenar',['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
	</div>
@endsection