<?php

namespace App\Http\Controllers;

use App\AlunoGracom;
use App\Informacoes;
use DB;
use Illuminate\Http\Request;

class AlunoGracomController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $alunos = DB::connection('another')->table('alunos_cadastro')->paginate(10);
      
        return view('alunoGracom.index',compact('alunos'));
    }

    public function busca(Request $request)
    {
        $busca = $request->get('nome');
        $alunos = DB::connection('another')->table('alunos_cadastro')->where([
            ['email','LIKE','%'.$busca.'%'],
            ['senha','LIKE','%'.$busca.'%']
            ])->orWhere('matricula', 'LIKE', '%'.$busca.'%')->paginate(10);

           
                return view('alunoGracom.index', compact('alunos'));
    }

    public function show(Aluno $aluno)
    {
        //
    }

    public function edit($matricula)
    {
        $aluno = DB::connection('another')->table('alunos_cadastro')->where('matricula',$matricula)->first();
        return view('alunoGracom.edit', compact('aluno', $aluno));
    }

    public function update(Request $request, AlunoGracom $aluno)
    {
        $request->validate([
            'email'=>'required',
        ]);

        $aluno = DB::connection('another')
        ->table('alunos_cadastro')
        ->where('matricula',$request->get('matricula'))
        ->update(['email' => $request->get('email'),'senha' => $request->get('senha')]);
 
        return redirect()->route('alunoGracom.index')
        ->with('info', 'Editado com Sucesso.');
    }

    public function destroy(Aluno $aluno)
    {
        //
    }
}
