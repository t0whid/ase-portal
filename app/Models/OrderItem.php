<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'line_no',
        'qty',
        'height',
        'width',
        'size_label',
        'color',
        'holes',
        'hole_size',
        'shape',
        'text_content',
        'line_styles',
        'unit_price',
        'subtotal',
        'payload',
    ];

    protected function casts(): array
    {
        return [
            'line_styles' => 'array',
            'payload' => 'array',
            'line_no' => 'integer',
            'qty' => 'integer',
            'height' => 'decimal:3',
            'width' => 'decimal:3',
            'unit_price' => 'decimal:2',
            'subtotal' => 'decimal:2',
        ];
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}