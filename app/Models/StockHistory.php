<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockHistory extends Model
{
    use HasFactory;

    // Columns you can mass assign
    protected $fillable = [
        'product_id',
        'quantity',   // + for restock, - for sale
        'reason',   // e.g., 'restock', 'order', 'manual_adjust'
    ];

    // Relationship: StockHistory belongs to a Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
