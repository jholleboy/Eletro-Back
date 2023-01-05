<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Tensao extends Model
{
      protected $primaryKey = 'Id';
    protected $table = 'tensao';
    protected $fillable = ['Tensao',];
    public  $timestamps   = false;
}
