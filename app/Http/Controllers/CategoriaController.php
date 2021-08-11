<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use DB;

class CategoriaController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Categoria $categorias)
    {
        $categorias = DB::table('categorias')->get();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_categoria'=>'required|unique:categorias',
        ]);

        $categoria = new Categoria();
        $categoria->nome_categoria = $request->get('nome_categoria');
        $categoria->save();

        return redirect()->route('categorias.index')
        ->with('success','Cadastro com sucesso');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
 
    public function destroy($id)
    {
        //
    }
}
