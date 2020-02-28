<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Order extends Pivot
{
    public $incrementing = true;

    protected $table = 'client_product';
}
