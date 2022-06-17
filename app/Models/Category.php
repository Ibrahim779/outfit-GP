<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['children'];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // public function scopeGetByGender($query, $gender)
    // {
    //     if ($gender == User::FEMALE)
    //        return $query->whereName('Women');

    //     return $query->whereName('Men');
    // }

    // public function scopeFilter($query)
    // {
    //     $query->when(request('gender'), fn($q) => $q->getByGender(request('gender')));
    // }
}
