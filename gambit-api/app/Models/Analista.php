<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Analista extends Model
{
    protected $fillable = ['nome', 'email', 'status', 'trello_id'];
}
