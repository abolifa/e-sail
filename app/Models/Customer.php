<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Customer extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory, InteractsWithMedia, HasApiTokens;

    protected $guarded = [];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function shippings()
    {
        return $this->hasMany(Shipping::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
