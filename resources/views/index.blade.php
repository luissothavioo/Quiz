@extends('layout')
@section('content')
    <div class= "jumbotron">
        <p class= "h3 text-center py-4">Quiz - O que voce sabe sobre FRIENDS</p >
    </div>
    <div class ="row">
        <div class ="col-md-6 col-sm-6 text-center imagem">
            <a href ="#" class ="img-thumbnail logo">
                <img class ="img-fluid" src ="{{asset('storage/imagem/capa.jpg')}}" />
            </a >
        </div >
        <div class ="col-md-6 col-sm-6 text-center py-4">
            <p class ="texto">
                <h4>Este quiz é para saber o quanto voce <br> sabe sobre a série FRIENDS!</h4>
            </p>
            <div class ="card-footer py-4 text-center">
                <a class ="btn btn-primary" href= "{{route('iniciar')}}">Começar</a >
            </div>
        </div>
    </div>
@endsection