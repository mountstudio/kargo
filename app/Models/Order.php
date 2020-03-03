<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Order extends Pivot
{
    public $incrementing = true;

    protected $fillable = [
        'client_id', 'product_id', 'city_id',
    ];

    protected $table = 'client_product';

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }

    public function attributes()
    {
        return $this->morphToMany(Attribute::class, 'attributable')->withTimestamps();
    }
}
