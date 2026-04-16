<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DayEntry extends Model
{
    protected $fillable = ['user_id', 'date', 'type', 'note'];

    protected $casts = [
        'date' => 'date',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
