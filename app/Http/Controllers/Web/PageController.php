<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Vaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;

class PageController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }

    public function vagas()
    {
        return Inertia::render('Vagas');
    }

    public function formularioVagas()
    {
        return Inertia::render('FormularioVagas');
    }

    public function editarVaga(int $vagaId)
    {   
        session(['vagaId' => $vagaId]);

        return Inertia::render('EditarVaga');
    }
}
