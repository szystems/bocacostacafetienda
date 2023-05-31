<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    protected $table = 'configs';
    protected $fillable = [
        'logo',
        'time_zone',
        'currency',
        'currency_simbol',
        'tax_status',
        'tax',
        'paypal',
        'dbt',
        'shipping_description',
        'email',
        'store',
        'shopify',
        'shopify_link',
        'amazon',
        'amazon_link',
        'advertisement',
        'advertisement_link',
        'advertisement_image'
    ];
}
