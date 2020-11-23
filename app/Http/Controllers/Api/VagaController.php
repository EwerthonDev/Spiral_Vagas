<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VagaController extends Controller
{
    public function store()
    {
        $usuarioLogado = Auth::user();

        return response()->json([
            'usuarioLogado' => $usuarioLogado
        ],Response::HTTP_OK);    
    }
}