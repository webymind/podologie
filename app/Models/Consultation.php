<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
        protected $fillable = [
        // 'user_id',
        'consultation_name',
        'price',
        'payment_method',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}





