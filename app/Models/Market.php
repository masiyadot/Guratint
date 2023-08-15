<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Market extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $table = 'market';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}