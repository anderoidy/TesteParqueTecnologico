@extends('templates.template')

@section('content')
    <h1 class="text-center">Livraria do Parque Tecnológico Sorocaba</h1> <hr>


<div class="text-center mt-3 mb-4">
    <a href="{{url('books/create')}}">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>

<div class="col-8 m-auto">
{{ csrf_field() }} 
<table class="table">
  <caption>Lista de Livros</caption>
  <thead>
    <tr>
      <th scope="col">Codigo do livro</th>
      <th scope="col">Titulo do Livro</th>
      <th scope="col">Autor</th>
      <th scope="col">Sinopse</th>
      <th scope="col">Tipo da Capa</th>
      <th scope="col">Codigo ISBN</th>       
      <th scope="col">Foto</th>
      <th scope="col">Ações</th>

      
    </tr>
  </thead>
  <tbody>

  @foreach($book as $books)
    <tr>
        <th scope="row">{{$books->id}}</th>
        <td>{{$books->titulo}}</td>
        <td>{{$books->autor}}</td>
        <td>{{$books->sinopse}}</td>
        <td>{{$books->tipocapa}}</td>
        <td>{{$books->codigoisbn}}</td>
        <td><img src="..." class="rounded float-right" alt="...">{{$books->foto}}</td>
        <td>
            <a href="{{url("books/$books->id")}}">
            <button class="btn btn-dark">Visualizar</button>
            </a>

           <a href="{{url("books/$books->id/edit")}}">
                <button class="btn btn-primary">Editar</button>
           </a> 

           <a href="{{url("books/$books->id")}}" class="js-del">
                <button class="btn btn-danger">Deletar</button>
           </a> 
        </td>
    </tr>    
    @endforeach

    
  </tbody>
</table>

</div>    
@endsection