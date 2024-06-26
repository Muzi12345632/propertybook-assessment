<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'package',
        'price',
        'description',
    ];



    public function user()
    {
        $this->belongsTo(User::class);
    }
    


}
