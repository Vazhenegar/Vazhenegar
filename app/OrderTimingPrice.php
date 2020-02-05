<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderTimingPrice extends Model
{
    protected $fillable=['daily_translatable_word', 'normal_delivery_price_per_page'];
}
