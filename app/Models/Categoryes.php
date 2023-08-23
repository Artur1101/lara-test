<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoryes extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table='categoryes';
    protected $fillable=array('name','icon');
}
