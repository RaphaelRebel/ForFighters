<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = ["afbeelding", "created_at", "updated_at", "description_1", "description_2", "description_3", "title"];
    use HasFactory;
}
