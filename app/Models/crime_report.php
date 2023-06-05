<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crime_report extends Model
{
    use HasFactory;
    protected $fillable = [
        "state", "local_govt", "street_address", "file_path", "comment",
    ];
}
