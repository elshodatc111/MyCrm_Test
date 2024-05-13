<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'paycom_transaction_id',
        'paycom_time',
        'paycom_time_datetime',
        'create_time',
        'perform_time',
        'cancel_time',
        'amount',
        'state',
        'reason',
        'receivers',
        'order_id',
        'perform_time_unix'
=======
class Transaction extends Model{
    use HasFactory;
    protected $fillable = [
        'transaction',
        'code',
        'state',
        'owner_id',
        'amount',
        'reason',
        'payme_time',
        'cancel_time',
        'create_time',
        'perform_time',
>>>>>>> 5288082 (Save)
    ];
}
