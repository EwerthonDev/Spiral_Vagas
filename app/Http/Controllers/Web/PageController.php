<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
}
