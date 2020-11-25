<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;

class VagaController extends Controller
{
    public function store(Request $request)
    {
        $vaga = new Vaga();
        $vaga->nome_vaga = $request->nome_vaga;
        $vaga->pais = $request->pais;
        $vaga->cidade = $request->cidade;
        $vaga->estado = $request->estado;
        $vaga->departamento = $request->departamento;
        $vaga->tipo_emprego = $request->tipo_emprego;
        $vaga->descricao_html = $request->descricao;
        $vaga->descricao_formatada = strip_tags ($request->descricao);

        $vaga->save();
    }

    public function update(int $vagaId, Request $request)
    {
        $vaga = Vaga::find($vagaId);
        $vaga->nome_vaga = $request->nome_vaga;
        $vaga->pais = $request->pais;
        $vaga->cidade = $request->cidade;
        $vaga->estado = $request->estado;
        $vaga->departamento = $request->departamento;
        $vaga->tipo_emprego = $request->tipo_emprego;
        $vaga->descricao_html = $request->descricao_html;
        $vaga->descricao_formatada = strip_tags ($request->descricao_html);

        $vaga->save();
    }

    public function resgatarVagas()
    {
        $vagas = Vaga::all();

        return response()->json([
            'vagas' => $vagas
        ], Response::HTTP_OK);
    }

    public function resgatarVaga(Request $request)
    {
        $vaga = Vaga::find($request->session()->get('vagaId'));

        return response()->json([
            'vaga' => $vaga
        ], Response::HTTP_OK);
    }
}