<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;
use App\Models\Department;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id'); // class_id is frogn key
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id'); // class_id is frogn key
    }
}
