<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    public $table = 'contacts';
    public $fillable = ['name','email','sujet','message'];
    use HasFactory, SoftDeletes, Notifiable;
}
