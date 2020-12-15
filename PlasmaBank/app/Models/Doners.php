<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doners extends Model
{
    protected $table = 'doners';
    protected $fillable = ['Name','Age','Address','Mobile','Email','BloodGroup','BloodPressure','Covidpositive','RecoveryDate','Certified'];
}
