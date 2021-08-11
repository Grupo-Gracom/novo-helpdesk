<?php

namespace App\Http\Controllers;

use App\Unidade;
use DB;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $unidades = DB::table('fp_unidades')
            ->join('escola_parceira', 'fp_unidades.unidade_franquia', '=', 'escola_parceira.id_escola')
            ->select('fp_unidades.*', 'escola_parceira.tipo')
            ->get();
        return view('unidades.index', compact('unidades'));
    }

    public function create()
    {
        $escolas = DB::table('escola_parceira')->get();
        return view('unidades.create', compact('escolas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'unidade' => 'required|unique:fp_unidades',
        ]);

        $unidade = new Unidade();
        $unidade->unidade = $request->get('unidade');
        $unidade->tipo = $request->get('tipo');
        $unidade->save();

        return redirect()->route('unidades.index')
            ->with('success', 'Cadastro com sucesso');
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
