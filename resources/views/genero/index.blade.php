@extends('layouts.admin')

@section('content')

@include('genero.modal');

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>            
            <th>Operaciones</th>
        </tr>
    </thead>    
    <tbody id="datos">        
    </tbody>    
</table>

@endsection

@section('scripts')
    {!!Html::script('js/script2.js')!!}        
@endsection