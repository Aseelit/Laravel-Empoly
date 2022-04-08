<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable=[
        'facebook',
        'twitter',
        'instagram',
        'whatsApp',
            ];
        public function user()
        {
            return $this->belongsTo(User::class,'user_id');
        }
}
