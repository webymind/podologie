<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
        protected $fillable = [
        'user_name',
        'service_name',
        'start',
        'end',
        'alldayCheckbox',
        'title',
        'description',
        'event_id', 
    ];

        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }

        public function service()
        {
            return $this->belongsTo(Service::class, 'service_id');
        }

}




