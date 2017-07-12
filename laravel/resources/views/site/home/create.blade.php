@extends ('site.template.template1')

@section('c')

<h1 class="title">Cadastro de Alunos</h1>

@if(isset ($errors)&& count($errors) > 0)
<div class="alert alert-danger">
    @foreach ($errors->all() as $erro)
    <p>{{$erro}}</p>
    @endforeach
</div>

@endif

<ul class="nav nav-pills">
  <li role="presentation"><a href="{{route('index')}}">Lista</a></li>
  <li role="presentation"><a href="{{url('/busca')}}">Busca</a></li>
  <li role="presentation" class="active"><a href="{{route('create')}}">Cadastro</a></li>
</ul>


    {!! Form::open (['route'=>'store', 'class' => 'form']) !!}

    
    <div class="form-group">
    {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome:']) !!}
    </div>
    <div class="form-group">
    {!! Form::text('matricula', null, ['class' => 'form-control', 'placeholder' => 'Matricula:']) !!}
    </div>
    <div class="form-group">
    {!! Form::text('nota', null, ['class' => 'form-control', 'placeholder' => 'Nota:']) !!}
    </div>
    <div class="form-group">
    {!! Form::text('rua', null, ['class' => 'form-control', 'placeholder' => 'Rua:']) !!}
    </div>
    <div class="form-group">
    {!! Form::text('numero', null, ['class' => 'form-control', 'placeholder' => 'Numero:']) !!}
    </div>
    <div class="form-group">
    {!! Form::text('bairro', null, ['class' => 'form-control', 'placeholder' => 'Bairro:']) !!}
    </div>
    
    {!! Form::submit('Salvar',['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection