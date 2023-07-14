<?php

namespace App\Models\Investment;

use App\Models\Actor\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentType extends Model
{
    use HasFactory;
    protected $table='investment_type';
    protected $id='id';
    protected $fillable = ['name','is_shareholders','added_by','memorandum_type','created_at','updated_at'];
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }

}
