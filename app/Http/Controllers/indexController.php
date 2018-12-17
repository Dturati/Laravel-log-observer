<?php

namespace App\Http\Controllers;

use App\pessoa;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;

class indexController extends Controller
{
    private $pessoa = [];

    public function index()
    {
        return view('indexC/indexC');
    }

    public function salvar(Request $request)
    {

        if ($request->isMethod('post')) {
            pessoa::create($request->all());
        }

        return redirect('/index');
    }
}
