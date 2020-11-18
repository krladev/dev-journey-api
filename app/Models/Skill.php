<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    // use HasFactory;
    public $fillable = ['icon', 'title', 'tags', 'info_title', 'info_description', 'stars', 'avatar'];
    
    
}


