@extends ('site.template.template1')

@section('c')

<h1>Listagem de Notas</h1>

<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="{{route('index')}}">Lista</a></li>
  <li role="presentation"><a href="{{url('/busca')}}">Busca</a></li>
  <li role="presentation"><a href="{{route('create')}}">Cadastro</a></li>
</ul>
<table class="table table-bordered">
    <tr>
     <th>Nome</th>
     <th>Nota</th>
    </tr>
    @foreach($alunos as $aluno)
    <tr>
        <td>{{$aluno->nome}}</td>
        <td>{{$aluno->nota}}</td>
    </tr>
    @endforeach
    
</table>

@endsection