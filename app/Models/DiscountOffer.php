<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountOffer extends Model
{
    use HasFactory;
    protected $fillable = ['discout_title','discount_price','image','block_color','button_settings'];
}
