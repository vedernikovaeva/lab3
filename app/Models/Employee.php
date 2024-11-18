<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'position', 
        'salary', 
        'children', 
        'experience'
    ];

    public function creator()
{
    return $this->belongsTo(User::class, 'creator_user_id');
}

}