<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    protected $guarded  = ['id'];
    use HasApiTokens, HasFactory, Notifiable;

    public function anak()
    {
        return $this->hasOne(balita::class);
    }
    
    public function ibu()
    {
        return $this->belongsTo(Ibu::class);
    }
}