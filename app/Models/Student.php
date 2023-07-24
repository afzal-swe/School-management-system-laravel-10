<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user_name()
    {
        return $this->belongsTo(User::class, 'user_id'); // class_id is frogn key
    }
}
