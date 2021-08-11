<?php

namespace App\Http\Controllers;

use App\Professor;
use App\User;
use DB;
use Hash;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $professores = DB::table('users')->where('nivel', 1)->paginate(10);
        return view('professor.index', compact('professores'));
    }

    public function busca(Request $request)
    {
        $busca = $request->get('nome');
        $professores = User::where('name', $busca)->orWhere('email', $busca)->paginate(10);

        return view('professor.index', compact('professores'));
    }

    public function create()
    {
        return view('professor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users',
        ]);

        $professor = new User();
        $professor->matricula = 0;
        $professor->name = $request->get('nome');
        $professor->email = $request->get('email');
        $professor->password = Hash::make($request->get('senha'));
        $professor->cargo_id = 3;
        $professor->telefone = $request->get('telefone');
        $professor->unidade_id = $request->get('cod_unidade');
        $professor->save();

        return redirect()->route('professor.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    public function show(Professor $professor)
    {
        //
    }

    public function edit(Professor $professor)
    {
        return view('professor.edit', compact('professor', $professor));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',

        ]);

        $professor = Professor::find($id);
        $professor->name = $request->nome;
        $professor->email = $request->email;
        $professor->status = $request->status;
        $professor->password = Hash::make($request->senha);
        $professor->save();

        return redirect()->route('professor.index')
            ->with('info', 'Editado com sucesso.');

    }

    public function destroy(Professor $professor)
    {
        //
    }
}
