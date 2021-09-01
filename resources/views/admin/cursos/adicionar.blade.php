@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')
  <div class="container">
    <h4 class="center">Adicionar Curso</h4>
    <div class="row">
      <form class="" action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include ('admin.cursos._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>
@endsection
