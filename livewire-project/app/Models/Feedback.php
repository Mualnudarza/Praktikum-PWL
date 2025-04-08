<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;  // Make sure this line exists
    
    protected $table = 'feedback';
    protected $fillable = ['name', 'email', 'feedback'];
}