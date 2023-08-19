<?php

namespace App\Models\Investment;

use App\Models\Actor\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareHolder extends Model
{
    use HasFactory;
    protected $table='shareholders';
    protected $id='id';
    protected $fillable = ['investment_id','customer_id','is_signed','created_at','updated_at'];
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id')->with('user:id,name');
    }
    public static function getIdAndInvestmentIdByCustomerId($customerId)
    {
        return self::where('customer_id', $customerId)
            ->with('Investment:id,investment_name')
            ->select('investment_id')
            ->get();
    }
    public function CustomerNameandId()
    {
        return Customer::with('user:id,name')
        ->select('id', 'user_id')
        ->whereIn('id', $this->pluck('customer_id'))
        ->get();
    }
}
