<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['user_id', 'code', 'phone', 'address', 'name', 'phone',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
