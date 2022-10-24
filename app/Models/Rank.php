<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rank extends Model
{
    public $timestamps = false;

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'rank', 'id');
    }

    public function rankDetails(): HasOne
    {
        return $this->hasOne(WebsiteRankDetail::class, 'rank_id', 'id');
    }
}