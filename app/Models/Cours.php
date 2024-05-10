<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model{
    use HasFactory;
    protected $fillable = [
        'crm_user_id',
        'techer_id',
        'category_id',
        'cours_name',
        'price1',
        'price2',
        'azolik',
        'davomiyligi',
        'video',
        'image',
        'min_text',
        'max_text'  
    ];
}
