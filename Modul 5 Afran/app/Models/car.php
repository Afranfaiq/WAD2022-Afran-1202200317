<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $table = "showroom_afran";
    use HasFactory;
    public $timestamps = false;

    protected $guarded = ['id'];

}
