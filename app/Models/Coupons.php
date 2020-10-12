<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    use HasFactory;
    protected $table = 'coupons';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'coupon_name',
        
    ];
}
