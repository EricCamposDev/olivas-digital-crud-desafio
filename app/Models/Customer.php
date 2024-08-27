<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','customer_type_id'];

    public function customerType()
    {
        return $this->belongsTo(CustomerType::class, 'customer_type_id');
    }
}
