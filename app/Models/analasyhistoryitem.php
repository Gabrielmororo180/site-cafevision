<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AnalasyHistoryItem extends Model
{
    use HasFactory;
    protected $table = 'analasy_history_items';
    protected $fillable = [
        'id_analasy_history',
        'json',
        'unripe',
        'semi_ripe',
        'ripe',
        'overripe',
        'dry',
        'num',
    ];

}
