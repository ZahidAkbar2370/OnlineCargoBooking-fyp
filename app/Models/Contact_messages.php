<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_messages extends Model
{
    use HasFactory;
    protected $table ="contact_messages";

    protected $filable=[
        'name',
        'email',
        'phone',
        'message',
    ];


}
