<?php

namespace App\Http\Controllers;

use App\Models\TipoProduto;
use Illuminate\Http\Request;

class TipoProdutoController extends Controller
{
    public function index()
    {
        $tipos = TipoProduto::all();
        return view('index', compact('tipos'));
    }
}
