<?php

namespace App\Http\Controllers;

use App\Anime;
use App\Http\Requests\AnimesFormRequest;
use Illuminate\Http\Request;

class AnimesController extends Controller
{
    public function index(Request $request){
        $animes = Anime::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        $request->session()->remove('mensagem');
        return view('animes.index', compact('animes', 'mensagem') );
    }

    public function create()
    {
        return view('animes.create');
    }

    public function store(AnimesFormRequest $request)
    {
        $anime = Anime::create($request->all());
        $request->session()
            ->flash('mensagem',"Anime ($anime->id) criado com sucesso ($anime->nome)");
        return redirect()->route('listarSeries');
    }

    public function destroy(Request $request)
    {
        Anime::destroy($request->id);
        $request->session()
            ->flash('mensagem',"Anime removida com sucesso");
        return redirect()->route('listarSeries');
    }
}
