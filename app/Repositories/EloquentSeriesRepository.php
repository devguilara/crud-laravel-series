<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;

use App\Repositories\SeriesRepository;
use App\Models\Serie;
use App\Models\Season;
use App\Models\Episode;

use Illuminate\Support\Facades\DB;



class EloquentSeriesRepository implements SeriesRepository
{
    public function addSerie(SeriesFormRequest $req): Serie
    {
        return  DB::transaction(function () use ($req){
            $serie = Serie::create($req->all());
            $seasons = [];
            for ($i = 1; $i <= $req->seasons; $i++) {
                $seasons[] = [
                    'series_id' => $serie->id,
                    'number' => $i,
                ];
            }
            Season::insert($seasons);
    
            $episodes = [];
            foreach ($serie->seasons as $season) {
                for ($j = 1; $j <= $req->epsSeasons; $j++) {
                    $episodes[] = [
                        'season_id' => $season->id,
                        'number' => $j
                    ];
                }
            }
            Episode::insert($episodes);

            return $serie;
        });
    }
}