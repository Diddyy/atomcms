<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WebsiteRankDetail extends Model
{
    protected $table = 'website_ranks_details';
    protected $primaryKey = 'rank_id';
    public $timestamps = false;
    protected $with = ['rank']; 
    
    public function rank(): BelongsTo
    {
        return $this->belongsTo(Rank::class, 'rank_id', 'id');
    }
}