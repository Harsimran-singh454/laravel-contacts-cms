<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'name',
        'DOB',
        'image',
        'address',
        'phone',
        'email',
    ];
}
