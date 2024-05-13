<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> 5288082 (Save)
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

<<<<<<< HEAD
class User extends Authenticatable implements MustVerifyEmail{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'phone',
        'type',
        'email',
        'password',
    ];
=======
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'filial_id',
        'name',
        'phone',
        'phone2',
        'addres',
        'tkun',
        'type',
        'status',
        'about',
        'smm',
        'balans',
        'admin_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
>>>>>>> 5288082 (Save)
    protected $hidden = [
        'password',
        'remember_token',
    ];
<<<<<<< HEAD
    protected function casts(): array{
=======

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
>>>>>>> 5288082 (Save)
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
