<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eps extends Model
{
    use HasFactory;

    protected $table = "eps";

    protected $fillable = [
        "id",
        "country_id",
        "city_id",
        "neighborhood_id",
        "nameEps",
        "address",
        "email",
        "mobile"
    ];
}
