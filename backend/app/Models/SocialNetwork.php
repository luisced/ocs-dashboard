<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    use HasFactory;

    protected $table = 'Social_Network';

    protected $fillable = [
        'User',
        'Social_Network',
    ];

    public $timestamps = false;
}
