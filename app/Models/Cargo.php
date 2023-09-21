<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = "cargos";

    protected $fillable = [
        "user_id",
        "traking_no",
        "sender_name",
        "sender_mobile_no",
        "sender_email",
        "sender_full_address",
        "receiver_name",
        "receiver_mobile_no",
        "receiver_email",
        "receiver_full_address",
        "item_name",
        "item_description",
        "cost",
        "payment_status",
        "status",
    ];
}
