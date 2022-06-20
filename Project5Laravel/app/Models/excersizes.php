<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class excersizes extends Model
{
    protected $fillable = ['Name', 'Description', 'user_id'];
}
