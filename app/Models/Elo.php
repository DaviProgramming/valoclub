<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elo extends Model
{
    use HasFactory;

    protected $table = 'elos';

    protected $fillable = [
        'nome_elo',
        'image_url'
    ];

}
