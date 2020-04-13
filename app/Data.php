<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model    
{
    
    protected $fillable = [

        'id', 'order_no', 'order_date','order_net','name','address_1','district','province','zip','product','quantity','price','discount','shipping','inv','numinv','sku',
    ];
}
											