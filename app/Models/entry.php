<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entry extends Model
{
    use HasFactory;
   protected $table = "addentry";
   protected $fillable = ['name','email','password','files'];

}
