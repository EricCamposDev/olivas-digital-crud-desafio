<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cocur\Slugify\Slugify;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = ['name','email', 'slug'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($seller) {
            $slugify = new Slugify();
            $seller->slug = $slugify->slugify($seller->name);
        });
    }
}
