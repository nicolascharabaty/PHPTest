<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'comments'
    ];
}
