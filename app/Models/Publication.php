<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'start_date',
        'end_date',
        'Masked',
        'Validated',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function annonce()
    {
        return $this->hasOne(Annonce::class, 'pub_id');
    }
    public function information()
    {
        return $this->hasOne(Information::class, 'pub_id');
    }
}
