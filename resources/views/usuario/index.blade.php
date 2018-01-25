@extends('layouts.admin')

@include('alerts.success');

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Operacion</th>
        </tr>
    </thead>
    @foreach($users as $user)
    <tbody>
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
        </tr>        
    </tbody>
    @endforeach
</table>
    {!!$users->render()!!}
@stop