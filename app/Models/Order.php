<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_address',
        'total_amount',
        'status',
        'notes',
    ];

    protected $casts = [
        'total_amount' => 'decimal:0',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getFormattedTotalAttribute()
    {
        return 'Rp ' . number_format($this->total_amount, 0, ',', '.');
    }

    public function getStatusBadgeAttribute()
    {
        return match($this->status) {
            'pending'    => ['label' => 'Pending',    'class' => 'bg-yellow-100 text-yellow-800'],
            'processing' => ['label' => 'Diproses',   'class' => 'bg-blue-100 text-blue-800'],
            'completed'  => ['label' => 'Selesai',    'class' => 'bg-green-100 text-green-800'],
            'cancelled'  => ['label' => 'Dibatalkan', 'class' => 'bg-red-100 text-red-800'],
            default      => ['label' => 'Unknown',    'class' => 'bg-gray-100 text-gray-800'],
        };
    }
}
