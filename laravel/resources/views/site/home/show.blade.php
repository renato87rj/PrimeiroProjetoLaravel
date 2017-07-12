@extends ('site.template.template1')

@section('c')

<h1 class="title">Busca de Alunos</h1>

<ul class="nav nav-pills">
  <li role="presentation"><a href="{{route('index')}}">Lista</a></li>
  <li role="presentation"  class="active"><a href="{{url('/busca')}}">Busca</a></li>
  <li role="presentation"><a href="{{route('create')}}">Cadastro</a></li>
</ul>


    <div class="panel-body">
            
      
            {!! Form::open(['method'=>'post', 'url'=>'busca'])!!}
             
              <div class="form-group">
                <input type="text" class="form-control" name="pesquisar" placeholder="Pesquise aqui">
              </div>
              <div class="form-group">
                  
                <button type="submit" class="btn btn-success">Pesquisar</button>
                  
              </div>
            
        
            {!! Form::close()!!}    
        
        
           



                


@endsection