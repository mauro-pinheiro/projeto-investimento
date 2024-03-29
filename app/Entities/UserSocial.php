<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class UserSocial extends Model
{
    use SoftDeletes;
    use Notifiable;

    public      $timeStamps = true;
    protected   $table      = 'user_socials';
    protected   $filltable  = ['user_id','social_network','social_id','social_email','social_avatar'];
    protected   $hidden     = [];
}
