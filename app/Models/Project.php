<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;
}

class Post extends Model
{
    /**
     * In fillable schrijf je welke velden je model moet hebben. Id en timestamp bestaan automatisch al, en hoef je niet op te schrijven.
     */
    protected $fillable = [
        'title',
        'body',
    ];
}