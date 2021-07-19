@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
    @php
        $user=$book->find($book->id)->relUsers;
      @endphp
      Codigo do Livro: {{$book->id}}<br>
      Título: {{$book->titulo}}<br>
      Autor: {{$book->autor}}<br>
      Sinopse: {{$book->sinopse}} <br>
      Tipo da Capa: {{$book->tipocapa}} <br>
      Codigo ISBN: {{$book->codigoisbn}} <br>
      Foto: {{$book->foto}} <br>   
    </div>
@endsection