<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
     use HasFactory;

    // Columns you can mass assign
    protected $fillable = [
        'user_id',
    ];

    // Relationship: Cart belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: Cart has many CartItems
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
