<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    protected $table = 'order_product';
    protected $fillable = [
    	'user_id',
    	'name', 'phone_number',
    	'order_date', 'order_address','total_price','note'
    ];

    public function order(){
    	return $this->belongsTo('App\Models\Category', 'category_post_id','id');
    }
    
}