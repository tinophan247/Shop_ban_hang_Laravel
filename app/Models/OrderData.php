<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderData extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'tbl_order';
    protected $primaryKey = 'order_id';
    protected $guarded = [];

}
