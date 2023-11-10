<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;


use App\Models\Serie;
use App\Models\Season;
use App\Models\Episode;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $req)
    {
        $series = Serie::with(['seasons'])->get();

        $mensagemSucesso = $req->session()->get('mensagem.sucesso');
        $req->session()->forget('mensagem.sucesso');

        return view('series.index')
            ->with('series', $series)
            ->with('mensagemSucesso',$mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $req)
    {   
        $serie = Serie::create($req->all());
        $seasons = [];

            for($i = 1; $i <= $req->seasons; $i++ ){
                $seasons = [
                        'series_id' => $serie->id,
                        'number' => $i,
                    ];
                }
            Season::insert($seasons);
            $episodes=[];
            foreach($serie->seasons as $season){

            
                for($k = 1; $k <= $req->epsSeasons; $k++ ){
                    $episodes = [
                        'season_id' => $season->id,
                        'number' => $k
                    ];
                }
            }
            Episode::insert($episodes);
        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com Sucesso");
    }

    public function destroy(Serie $series, Request $req)
    {   
        $series->delete();
        $req->session()->put('mensagem.sucesso',"Série '{$series->nome}' removida com sucesso");

        return to_route('series.index');


    }

    public function edit(Serie $series, Request $req)
    {   
      return view('series.edit')->with('serie', $series);

    }

    public function update(Serie $series, SeriesFormRequest $req)
    {   
        $series->fill($req->all());
        $series->save();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Serie '{$series->nome}' atualizada com sucesso!");
    }
}

