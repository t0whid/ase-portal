<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedTemplate extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'job_name',
        'payload',
        'total_tags',
        'total_pieces',
    ];

    protected function casts(): array
    {
        return [
            'payload' => 'array',
            'total_tags' => 'integer',
            'total_pieces' => 'integer',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}