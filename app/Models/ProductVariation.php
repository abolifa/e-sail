<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ProductVariation extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\ProductVariationFactory> */
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
