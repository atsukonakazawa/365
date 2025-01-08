<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $fillable = [
        'word'
    ];

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}
