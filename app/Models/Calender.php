<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['outfit'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function outfit()
    {
        return $this->belongsTo(Outfit::class);
    }
}
