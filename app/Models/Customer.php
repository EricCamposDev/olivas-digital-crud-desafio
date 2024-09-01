<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cocur\Slugify\Slugify;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','slug','customer_type_id'];

    public function customerType()
    {
        return $this->belongsTo(CustomerType::class, 'customer_type_id');
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($customer) {
            $slugify = new Slugify();
            $customer->slug = $slugify->slugify($customer->name);
        });
    }
}
