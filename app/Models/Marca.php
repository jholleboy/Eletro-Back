<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Marca extends Model
{
      protected $primaryKey = 'Id';
    protected $table = 'marca';
    protected $fillable = ['Marca',];
    public  $timestamps   = false;
}
