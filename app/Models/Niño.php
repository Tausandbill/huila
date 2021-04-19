<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niño extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cuidadores()
    {
        return $this->belongsToMany(Cuidador::class);
    }
}
