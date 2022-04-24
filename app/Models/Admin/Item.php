<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';

    protected $fillable = ['label','value','count','duration'];

    public function package(){
        return $this->belongsTo('App\Models\Admin\Package');
    }

}
