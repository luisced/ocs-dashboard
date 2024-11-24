<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'Contacts';

    protected $fillable = [
        'RFC',
        'Name',
        'Email',
        'Phone_Number',
        'Address',
        'dTimeStamp',
    ];

    public $timestamps = false;
}
