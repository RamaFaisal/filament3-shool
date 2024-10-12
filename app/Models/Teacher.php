<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    use HasFactory;

    protected $guarded = [];

    function classroom() : HasMany {
        return $this->hasMany(HomeRoom::class);
    }

    // function team() : BelongsToMany {
    //     return $this->belongsToMany(Team::class);
    // }
}