@extends('layout')
@section('content')
    <div class= "container-fluid">
        <p class= "h3 text-center py-4">QUIZ</p >
    </div>
    <div class ="col-md col-sm text-center">
        <p class ="texto">
            <h4 class="subitle">este quiz é para saber o quanto voce sabe sobre a série Friends</h4>
        </p>
    </div>
    <div class ="card text-center imagem">
        <a href ="#" class ="img-thumbnail logo">
            <img class ="img-fluid" src ="{{asset('storage/imagem/capa.jpg')}}" />
        </a >
        <div class ="card-footer py-4 text-center">
            <a class ="btn" href= "{{route('iniciar')}}">Começar</a >
    </div>
    </div >
    
@endsection