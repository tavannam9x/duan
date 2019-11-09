<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name', 'email','address','password',
        'phone_number','birthday','gender','rate_star',
        'role'
    ];
}
?>