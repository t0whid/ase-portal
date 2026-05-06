<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'order_number',
        'quote_number',
        'customer_name',
        'customer_email',
        'customer_phone',
        'company',
        'job_name',
        'total_tags',
        'total_pieces',
        'product_subtotal',
        'product_total',
        'shipping_total',
        'grand_total',
        'shipping_address',
        'billing_address',
        'shipping_method',
        'payment_status',
        'payment_method',
        'card_last_four',
        'order_status',
        'proof_approved',
        'proof_approved_at',
        'payload',
    ];

    protected function casts(): array
    {
        return [
            'shipping_address' => 'array',
            'billing_address' => 'array',
            'payload' => 'array',
            'proof_approved' => 'boolean',
            'proof_approved_at' => 'datetime',
            'total_tags' => 'integer',
            'total_pieces' => 'integer',
            'product_subtotal' => 'decimal:2',
            'product_total' => 'decimal:2',
            'shipping_total' => 'decimal:2',
            'grand_total' => 'decimal:2',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function files()
    {
        return $this->hasMany(OrderFile::class);
    }
}
