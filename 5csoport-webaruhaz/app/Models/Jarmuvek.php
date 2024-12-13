<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jarmuvek extends Model
{
    use HasFactory;
    protected $table = "Jarmuvek";

    protected $fillable = [
        'id',
        'gyarto',
        'tipus',
        'motor',
        'uzemanyag',
        'hajtas',
        'karosszeria',
        'ajtokSzama',
        'ar',
        'kep',
    ];
}

