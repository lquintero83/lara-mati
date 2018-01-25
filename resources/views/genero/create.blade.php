@extends('layouts.admin')

@section('content')

{!!Form::open()!!}

<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display: none">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Genero Agregado Correctamente</strong>
</div>


<input type="hidden" id="token2" name="_token" value="{{ csrf_token()}}" >
    @include('genero.form.genero')
    {!!link_to('#',$title='Registrar',$attributes=['id'=>'registro', 'class'=>'btn btn-primary'], $secure=null)!!}    

{!!Form::close()!!}


@endsection

@section('scripts')
    {!!Html::script('js/script.js')!!}        
@endsection