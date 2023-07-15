<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RealStatePhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo', 'is_thumb'
    ];

    public function realState()
    {
        return $this->belongsTo(RealState::class);
    }
}
