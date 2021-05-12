<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $table = 'user_info';

    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'cts_id',
        'name'
    ];

}
