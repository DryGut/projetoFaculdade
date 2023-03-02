<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculdade extends Model
{
    protected $table = 'faculdades';
    public $timestamp = false;

    protected $fillabel = [
        'nome',
        'estado',
        'site',
    ];

    use HasFactory;
}
