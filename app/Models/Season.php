<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    protected $fillable = ['number'];

    public function series()
    {
      return $this->belongTo(Serie::class);
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);

    }
}
