<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['user_id', 'code', 'phone', 'address', 'name', 'phone',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->using(Order::class)->withPivot(['quantity'])->withTimestamps();
    }
}
