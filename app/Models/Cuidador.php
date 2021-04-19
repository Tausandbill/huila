<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function niño(){
        return $this->belongsToMany(Niño::class);
    }
}
