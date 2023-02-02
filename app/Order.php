<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';

    protected $fillable = [
        'status',
        'user_id',
        'course_id',
        'snap_url',
        'metadata',
    ];

    protected $casts = [
        'created_at'=> 'datetime:Y-m-d H:i:s',
        'updated_at'=> 'datetime:Y-m-d H:i:s',
        'metadata' => 'array',
    ];

}
