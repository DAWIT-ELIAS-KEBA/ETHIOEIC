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
    protected $fillable = ['name','added_by','investment_or_business','created_at','updated_at'];
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
    public function InvestmentTypeNameandId($condition)
    {
    
            // Apply the condition to the query
            $query=self::where('investment_or_business', $condition)->select('id', 'name')->get();
            return $query;
    }
    
}
