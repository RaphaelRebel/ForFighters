<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ["afbeelding", "created_at", "updated_at", "description", "title", "code"];
    use HasFactory;
}
