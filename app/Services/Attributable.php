<?php


namespace App\Services;


use App\Models\Attribute;

class Attributable
{
    public static function hasAttribute($model)
    {
        $attributes = Attribute::all();

        $attributes = $attributes->filter(function ($item) use ($model) {
            return in_array($model, $item->models);
        });

        return $attributes;
    }
}
