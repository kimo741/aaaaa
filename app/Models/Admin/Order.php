<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "client_name",
        "email",
        "city",
        "company_name",
        "phone",
        "age",
        "service",
        "type",
    ];
}
