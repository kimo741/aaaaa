<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table = 'packages';

    protected $fillable = ['name','price','description','items_id','status','type_label','type_value'];

    protected $casts = ['items_id' => AsCollection::class];

    public function items(){
        return $this->hasMany('App\Models\Admin\Item');
    }

    public function clients(){
        return $this->hasMany('App\Models\Admin\Client');
    }
}
