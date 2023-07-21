<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\User;

class Zone extends Model
{
    use HasFactory;
    protected $table='Zone';
    protected $id='id';
    protected $fillable = ['name', 	'region_id', 	'created_by', 'created_at', 'updated_at'];
    public function CreatedBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }    
    public function Woredas()
    {
        return $this->hasMany(Woreda::class,'zone_id','id');
    }
}
