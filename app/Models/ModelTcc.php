<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTcc extends Model
{
    use HasFactory;

    protected $table="tbfaleconosco";
    protected $fillable = ['nomeFaleConosco','emailFaleConosco','mensagemFaleConosco'];
    public $timestamps = false;
}
