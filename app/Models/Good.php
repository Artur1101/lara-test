<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table='goods';
    protected $fillable=array('name','category','price');
}
