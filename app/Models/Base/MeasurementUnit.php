<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\User;
class MeasurementUnit extends Model
{
    use HasFactory;
    protected $table='measurement_unit';
    protected $id='id';
    protected $fillable = ['name','created_by','created_at' ,'updated_at'];
    public function CreatedBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
}
