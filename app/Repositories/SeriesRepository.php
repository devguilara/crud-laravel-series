<?php 

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;

interface SeriesRepository{
    public function addSerie(SeriesFormRequest $req): Serie;
}
