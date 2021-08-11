<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Unidade;
use App\User;
use DB;
use Hash;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $alunos = DB::table('users')->paginate(10);

        return view('aluno.index', compact('alunos'));
    }

    public function studio(){
        $alunoStudio = DB::table('users')->paginate(10);

        return view('alunoStudio.index', compact('alunoStudio'));
    }

    public function busca(Request $request)
    {
        $busca = $request->get('nome');
        $alunos = User::where('name', $busca)->orWhere('email', $busca)->paginate(10);

        return view('aluno.index', compact('alunos'));
    }

    public function create()
    {
        $unidades = Unidade::all();
        return view('aluno.create', compact('unidades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'matricula' => 'required',
            'email' => 'required|unique:users',
        ]);

        $aluno = new User();
        $aluno->name = $request->get('nome');
        $aluno->email = $request->get('email');
        $aluno->matricula = $request->get('matricula');
        $aluno->password = Hash::make($request->get('senha'));
        $aluno->nivel = 0;
        $aluno->status = 0;
        $aluno->cargo_id = 3;
        $aluno->telefone = $request->get('telefone');
        $aluno->unidade_id = $request->get('cod_unidade');
        $aluno->save();

        return redirect()->route('aluno.index')
            ->with('success', 'Cadastrado com sucesso.');

    }

    public function show(Aluno $aluno)
    {
        //
    }

    public function edit(User $aluno)
    {
        return view('aluno.edit', compact('aluno', $aluno));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->nome;
        $user->email = $request->email;
        $user->nivel = $request->nivel;
        $user->status = $request->status;
        $user->password = Hash::make($request->senha);
        $user->save();
        return redirect()->route('aluno.index')
            ->with('info', 'Editado com Sucesso.');
    }

    public function destroy(User $aluno)
    {
        //
    }
}
