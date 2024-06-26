<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;


    protected $fillable = [
        'author',
        'title',
        'text',
        'image',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
