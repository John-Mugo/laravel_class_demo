<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subcounty extends Model
{
    use HasFactory;


    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'sub_county_id', 'id');

    }

    public function towns() {
        return $this->hasMany(Town::class, 'sub_county_id', 'id');
    }
}
