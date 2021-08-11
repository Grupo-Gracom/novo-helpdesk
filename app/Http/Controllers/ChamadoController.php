<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Chamado;
use App\Unidade;
use DB;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $chamados = DB::table('chamados')
            ->join('fp_unidades', 'chamados.id_escola', '=', 'fp_unidades.unidade_id')
            ->join('categorias', 'chamados.id_categoria', '=', 'categorias.id')
            ->select('chamados.*', 'fp_unidades.unidade_nome', 'categorias.nome_categoria')
            ->where('status', 0)
            ->get();
        return view('chamados.index', compact('chamados'));
    }

    public function arquivados()
    {
        $chamados = DB::table('chamados')
            ->join('fp_unidades', 'chamados.id_escola', '=', 'fp_unidades.unidade_id')
            ->join('categorias', 'chamados.id_categoria', '=', 'categorias.id')
            ->select('chamados.*', 'fp_unidades.unidade_nome', 'categorias.nome_categoria')
            ->where('status', 1)
            ->get();
        return view('arquivados.index', compact('chamados'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        $unidades = Unidade::all();
        return view('chamados.create', compact('categorias', 'unidades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo_chamado' => 'required',
            'observacao' => 'required',
        ]);

        $chamado = new Chamado();
        $chamado->titulo_chamado = $request->get('titulo_chamado');
        $chamado->id_escola = $request->get('id_escola');
        $chamado->id_categoria = $request->get('id_categoria');
        $chamado->observacao = $request->get('observacao');
        $chamado->solicitante = $request->get('solicitante');
        $chamado->quem_solicitou = $request->get('quem_solicitou');
        $chamado->save();

        return redirect()->route('chamados.index')
            ->with('success', 'Cadastrado com sucesso');
    }

    public function show($id)
    {
        //
    }

    public function edit(Chamado $chamado)
    {
        $categoria = Categoria::all();
        return view('chamados.edit', compact('chamado', 'categoria', $chamado));
    }

    public function update(Request $request, Chamado $chamado)
    {
        $request->validate([
            'titulo_chamado' => 'required',
            'observacao' => 'required',

        ]);

        $chamado->update($request->all());
        $chamado->save();

        return redirect()->route('chamados.index')
            ->with('info', 'Editado com sucesso');
    }

    public function destroy($id)
    {
        //
    }
}
