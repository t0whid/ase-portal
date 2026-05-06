<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedAddress extends Model
{
    protected $fillable = [
        'user_id',
        'nickname',
        'street',
        'city',
        'state',
        'zip',
        'contact_name',
        'phone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}