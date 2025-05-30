<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'mobile',
        'service',
        'message',
        'status',
        'date',     
        'time', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
