<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $table = 'transfers';
    protected $fillable = [
        'sender_office',
        'receiver_office',
        'sender_name',
        'receiver_name',
        'amount',
        'send_date',
    ];
}
