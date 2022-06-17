<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outfit extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category', 'clothes'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function clothes()
    {
        return $this->belongsToMany(Clothe::class, 'outfit_clothes');
    }
}
