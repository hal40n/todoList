<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    public $table = 'todos';

    protected $fillable = [
        'text',
        'completed'
    ];

    protected $casts = [
        'completed' => 'boolean'
    ];

    public $timestamps = false;
}