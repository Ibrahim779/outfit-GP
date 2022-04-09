<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use INeop\FileUpload\Facades\FileUpload;

class Clothe extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function outfits()
    {
        return $this->belongsToMany(Outfit::class);
    }

    public function setImageAttribute($image)
    {
        if ($image)
            $this->attributes['image'] = FileUpload::make($image)->store('clothes');
    }

    public function getImgAttribute()
    {
        return $this->image ? asset('storage/'. $this->image) : asset('assets/images/default.png');
    }

}
