<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    protected $fillable = [
        'team_id',
        'name',
        'number',
        'grad_year',
        'hs',
        'avatar',
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
