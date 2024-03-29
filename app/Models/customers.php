<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $PrimaryKey = 'id';

    protected $keyType = 'integer';
    
    protected $fillable = [

        'id',
        'name',
        'address',
        'status',
        'gender',
    ];
}
