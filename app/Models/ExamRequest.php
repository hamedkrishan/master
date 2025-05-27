<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'test_id',
        'package_id',
        'date',
        'time',
        'insurance_number',
        'status',
    ];

    // علاقة الطلب بالمستخدم
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // علاقة الطلب بالفحص (إذا كان النوع test)
    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }

    // علاقة الطلب بالباكج (إذا كان النوع package)
    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
}
