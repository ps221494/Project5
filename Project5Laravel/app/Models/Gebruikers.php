<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gebruikers extends Model
{
    use HasFactory;
    protected $table = "Gebruikers";
    protected $fillable = [
        "id",
        "Naam",
    ];
    public $timestamps = false;
}
