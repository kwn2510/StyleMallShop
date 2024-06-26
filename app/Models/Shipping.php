<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'shipping_name', 'shipping_address', 'shipping_phone','shipping_email','shipping_note'
    ];
    protected $primaryKey = 'shipping_id';
 	protected $table = 'tbl_shipping';

    public function order(){
        return $this->hasMany('App\Models\Order');
    }
}