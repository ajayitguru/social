<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challengecategory extends Model
{
    protected $fillable=['name','description','image','sortorder','status'];
}
