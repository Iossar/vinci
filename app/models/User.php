<?php

namespace app\models;

use \Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $fillable = ['github_id', 'github_login'];
    public $timestamps = false;
}