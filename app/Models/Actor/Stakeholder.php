<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stakeholder extends Model
{
    use HasFactory;
    protected $table='stakeholders';
    protected $id='id';
    protected $fillable = ['name', 'code','api_link','api_token','key','data_format','created_at','updated_at'];

}
