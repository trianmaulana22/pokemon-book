<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemons;

class PokemonController extends Controller
{
    public function index(){
        $pokemons = Pokemons::orderBy('id', 'asc')->get();
        return view('pokemon.index', compact('pokemons'));
    }

    public function show($id)
    {
        $pokemon = Pokemons::find($id);

        if (!$pokemon) {
            return response()->json(['message' => 'Pokemon not found'], 404);
        }

        return view('pokemon.show', compact('pokemon'));
    }
}
