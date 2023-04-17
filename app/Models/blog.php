<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'abstract',
        'Content',
        'product',
        'user_id',
        'manager_id',
        'client_id',
        'status',
    ];
    protected $table = 'blog';

 
}