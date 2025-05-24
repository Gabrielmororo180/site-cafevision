<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Configuration extends Model
{
   use HasFactory;

    protected $table = 'configuration'; // nome da tabela, se necessário

    protected $fillable = [
        'unripe',
        'semi_ripe',
        'ripe',
        'overripe',
        'dry',
    ];

    protected $casts = [
        'unripe' => 'double',
        'semi_ripe' => 'double',
        'ripe' => 'double',
        'overripe' => 'double',
        'dry' => 'double',
    ];
}
