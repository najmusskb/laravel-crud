<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'categorys_tables';

    protected $fillable = [
        "name",	
        "description",
        "is_active"
    ];

}
