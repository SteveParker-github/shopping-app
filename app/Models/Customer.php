<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'first_name', 'last_name', 'address'];

    public function user() {
        return $this->belongs(User::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }
}
