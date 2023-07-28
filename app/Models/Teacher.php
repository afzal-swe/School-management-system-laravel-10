<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\User;

class Teacher extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id'); // class_id is frogn key
    }

    public function user_name()
    {
        return $this->belongsTo(User::class, 'user_id'); // class_id is frogn key
    }
}
