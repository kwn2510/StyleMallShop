<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'customer_id', 'shipping_id', 'payment_id','order_total','order_status'
    ];
    protected $primaryKey = 'order_id';
 	protected $table = 'tbl_order';

    public function shipping(){
        return $this->belongsTo('App\Models\Shipping','shipping_id');
    }
}
