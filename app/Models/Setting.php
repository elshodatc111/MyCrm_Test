<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model{
    use HasFactory;
    protected $fillable = [
        'phone',
        'email',
        'addres',
        'sayt',
        'telegram',
        'instagram',
        'facebook',
        'banner_text',
        'text1',
        'text2',
        'text3',
        'text4',
    ];
}
