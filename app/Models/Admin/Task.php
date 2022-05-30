<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';

    protected $fillable = ['client_id','items','status'];

    protected $casts = [
        'items' => AsCollection::class
    ];

}
