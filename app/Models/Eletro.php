<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Eletro extends Model
{
      protected $primaryKey = 'Id';
    protected $table = 'eletros';
    protected $fillable = ['Nome','Descricao','Tensao','Marca',];
    public  $timestamps   = false;
}
