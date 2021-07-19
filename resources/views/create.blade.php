@extends('templates.template')

@section('content')
    <h1 class="text-center"Cadastrar</h1> <hr>

    <div class="col-8 m-auto">  

    @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
    @endif

    @if(isset($book)) 
    <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
    {{ method_field('PUT') }}
    @else
        <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
    @endif       
        {{ csrf_field() }}  
        <select class="form-control" name="id_user" id="id_user" required>
            <option value="{{$book->relUsers->id}}">{{$book->relUsers->name}}</option>
            @foreach($users as $user)
              <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach        
        </select><br><br>

        <input class="form-control" type="text" name="titulo" id="titulo" placeholder="titulo" value="{{$book->titulo}}" required><br>
        <input class="form-control" type="text" name="autor" id="autor" placeholder="autor"   value="{{$book->autor}}" required><br>
        <input class="form-control" type="text" name="sinopse" id="sinopse" placeholder="Sinopse"  value="{{$book->sinopse}}" required><br>
        <input class="form-control" type="text" name="tipocapa" id="tipocapa" placeholder="Tipo Capa"  value="{{$book->tipocapa}}" required><br>
        <input class="form-control" type="text" name="codigoisbn" id="codigoisbn" placeholder="Codigo ISBN"  value="{{$book->codigoisbn}}" required><br>
        <input class="form-control" type="text" name="foto" id="foto" placeholder="Foto"  value="{{$book->foto}}"><br>
        <input class="btn btn-primary" type="submit"  value="@if(isset($book)) Editar @else Cadastrar @endif">
        </form>
    </div>
@endsection