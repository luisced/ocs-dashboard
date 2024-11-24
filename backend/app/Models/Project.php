<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'Projects';

    protected $fillable = [
        'Email',
        'Name',
        'Id_Contact',
        'Description',
        'Objective',
        'ID_Type',
        'Photo',
        'URL',
        'Id_Social_Network',
        'Phone_Number',
        'Address',
        'Status',
        'dTimeStamp',
    ];

    public $timestamps = false;
}
