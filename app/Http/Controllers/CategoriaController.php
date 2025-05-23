<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index () {

        $categorias = Categoria::all();

        if ($categorias->isEmpty()) {
            return response()->json(['message' => 'No tienes categorias disponibles'], 400);
        }

        return response()->json(['data' => $categorias], 200);
    }
}
