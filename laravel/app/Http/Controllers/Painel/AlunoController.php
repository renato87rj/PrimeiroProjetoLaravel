<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Painel\Aluno;
use App\Model\Painel\Endereço;
use App\Http\Requests\AlunoFormRequest;

class AlunoController extends Controller
{
    private $endereço;
    private $aluno;
    
    public function __construct(Aluno $aluno, Endereço $endereço) {
        $this->aluno = $aluno;
        $this->endereço = $endereço;
    }
    
    

    public function index()
    {
        $title = 'Lista de alunos';
        
        $alunos = $this->aluno->all();
        
        return view('site.home.index', compact('alunos','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastro de alunos Laravel';
        
        return view('site.home.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlunoFormRequest $request)
    {
        //pega os dados do formulário
        $data1 = $request->all();
        $data2 = $request->all();
        
        
        //cadastra os dados no banco
        $insert = $this->aluno->create($data1);
        $insert2 = $this->endereço->create($data2);
        
        
        
        if($insert)
            return redirect ()->route ('index');
        else
            return redirect ()->route ('create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return "show[$id]";
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function busca()
    {
        $title = 'Busca de alunos';
        
        //$pesquisar = \Request::get('pesquisar');
        $alunos = $this->aluno->where('id', 'like', '%.$alunos.%')->get();
        return view('site.home.show', compact('alunos', 'title'));
    }
        
    
}
