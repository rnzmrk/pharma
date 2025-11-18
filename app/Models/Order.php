<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Columns you can mass assign
    protected $fillable = [
        'user_id',
        'total_amount',
        'status',
    ];

    // Relationship: Order belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: Order has many OrderItems
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
