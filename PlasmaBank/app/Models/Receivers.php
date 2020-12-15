<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receivers extends Model
{
    protected $table = 'receivers';
    protected $fillable = ['Name','Age','Address','Mobile','Email','BloodGroup','BloodPressure','Covidpositive','RecoveryDate','Certified'];
}
