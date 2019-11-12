<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Slideshow extends Model
{
    protected $table = 'slide_show';
    protected $fillable = [
    	'description',
    	'link', 'status','order_slide'
    ];
    
}