<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalasyHistory extends Model
{
    use HasFactory;

    protected $table = 'analasy_history';

    // Se quiser permitir atribuição em massa (mass assignment)
    protected $fillable = [
    'obs',
    'image_1',
    'image_2',
    'image_3',
    'json_api',
    'status',
    'unripe',
    'semi_ripe',
    'ripe',
    'overripe',
    'dry',
];


    // Se o JSON precisar ser acessado como array
    protected $casts = [
        'json_api' => 'array',
    ];

    public function items()
    {
        return $this->hasMany(\App\Models\AnalasyHistoryItem::class, 'id_analasy_history');
    }

}
