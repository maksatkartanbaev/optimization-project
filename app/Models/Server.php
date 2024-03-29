<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Server extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function logs(): HasMany
    {
        return $this->hasMany(Log::class);
    }

    public function latestLog(): HasOne
    {
        return $this->hasOne(Log::class)->latestOfMany();
    }
}
