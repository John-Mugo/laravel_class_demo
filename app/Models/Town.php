<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Town extends Model
{
    use HasFactory;

    public function sub_county(): BelongsTo
    {
        return $this->belongsTo(Subcounty::class, 'sub_county_id', 'id');
    }
}
