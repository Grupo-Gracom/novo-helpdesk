<?php

namespace App\Http\Controllers;

use App\Chamado;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $totalProfessor = User::where('nivel', '=', 1)->count();
        $totalAlunoFree = User::where('nivel', '=', 0)->count();
        $totalAlunoPremium = User::where('nivel', '=', 3)->count();

        $chamadosJan = Chamado::whereMonth('created_at', '1')->count();
        $chamadosFev = Chamado::whereMonth('created_at', '2')->count();
        $chamadosMar = Chamado::whereMonth('created_at', '3')->count();
        $chamadosAbr = Chamado::whereMonth('created_at', '4')->count();
        $chamadosMai = Chamado::whereMonth('created_at', '5')->count();
        $chamadosJun = Chamado::whereMonth('created_at', '6')->count();
        $chamadosJul = Chamado::whereMonth('created_at', '7')->count();
        $chamadosAgo = Chamado::whereMonth('created_at', '8')->count();
        $chamadosSet = Chamado::whereMonth('created_at', '9')->count();
        $chamadosOut = Chamado::whereMonth('created_at', '10')->count();
        $chamadosNov = Chamado::whereMonth('created_at', '11')->count();
        $chamadosDez = Chamado::whereMonth('created_at', '12')->count();

        $arquioJan = Chamado::whereMonth('created_at', '1')->where('status', '1')->count();
        $arquioFev = Chamado::whereMonth('created_at', '2')->where('status', '1')->count();
        $arquioMar = Chamado::whereMonth('created_at', '3')->where('status', '1')->count();
        $arquioAbr = Chamado::whereMonth('created_at', '4')->where('status', '1')->count();
        $arquioMai = Chamado::whereMonth('created_at', '5')->where('status', '1')->count();
        $arquioJun = Chamado::whereMonth('created_at', '6')->where('status', '1')->count();
        $arquioJul = Chamado::whereMonth('created_at', '7')->where('status', '1')->count();
        $arquioAgo = Chamado::whereMonth('created_at', '8')->where('status', '1')->count();
        $arquioSet = Chamado::whereMonth('created_at', '9')->where('status', '1')->count();
        $arquioOut = Chamado::whereMonth('created_at', '10')->where('status', '1')->count();
        $arquioNov = Chamado::whereMonth('created_at', '11')->where('status', '1')->count();
        $arquioDez = Chamado::whereMonth('created_at', '12')->where('status', '1')->count();

        $chartjs = app()->chartjs
            ->name('lineChartTest')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'])
            ->datasets([
                [
                    "label" => "Solicitações",
                    'backgroundColor' => "rgba(255, 99, 71, 0.31)",
                    'borderColor' => "rgba(255, 99, 71, 0.7)",
                    "pointBorderColor" => "rgba(255, 255, 255, 0.7)",
                    "pointBackgroundColor" => "rgba(255, 99, 71, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => [$chamadosJan, $chamadosFev, $chamadosMar, $chamadosAbr, $chamadosMai, $chamadosJun, $chamadosJul, $chamadosAgo,
                        $chamadosSet, $chamadosOut, $chamadosNov, $chamadosDez],
                ],
                [
                    "label" => "Solicitações resolvidas",
                    'backgroundColor' => "rgba(38, 185, 154, 0.41)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => [$arquioJan, $arquioFev, $arquioMar, $arquioAbr, $arquioMai, $arquioJun, $arquioJul, $arquioAgo, $arquioSet, $arquioOut, $arquioNov, $arquioDez],
                ],
            ])
            ->options([]);

        return view('home.index', compact('totalProfessor', 'totalAlunoFree', 'totalAlunoPremium', 'chartjs'));
    }
}
