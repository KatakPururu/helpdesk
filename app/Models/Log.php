<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'log_id',
        'log_type',
        'system',
        'application',
        'user_id',
        'timestamp',
        'log_text',
        'log_status'
    ];
}
