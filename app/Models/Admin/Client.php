<?php

namespace App\Models\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class Client extends Authenticatable implements MustVerifyEmail
{
    use  HasFactory, Notifiable;

    protected $table = 'clients';
    protected $fillable = ['first_name','last_name','email','email_verified_at','status','image','phone','password'];


    public function packages(){
        return $this->belongsTo('App\Models\Admin\Package');
    }
}
