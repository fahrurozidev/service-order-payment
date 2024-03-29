<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentLog extends Model
{
    //
    protected $table = 'payment_logs';

    protected $fillable = [
        'status',
        'payment_type',
        'raw_response',
        'order_id',
    ];

    protected $casts = [
        'created_at'=> 'datetime:Y-m-d H:i:s',
        'updated_at'=> 'datetime:Y-m-d H:i:s',
    ];
}
