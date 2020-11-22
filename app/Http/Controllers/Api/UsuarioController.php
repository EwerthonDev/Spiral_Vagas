<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarioLogado = Auth::user();

        return response()->json([
            'usuarioLogado' => $usuarioLogado
        ],Response::HTTP_OK);    
    }
}
