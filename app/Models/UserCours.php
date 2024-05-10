<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCours extends Model{
    use HasFactory;
    protected $fillable = [
        'cours_id',
        'user_id',
        'end_data',
    ];
}
