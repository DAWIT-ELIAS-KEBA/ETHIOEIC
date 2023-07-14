<?php

namespace App\Models\Investment;

use App\Models\Actor\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareHolder extends Model
{
    use HasFactory;
    protected $table='Table_name';
    protected $id='id';
    protected $fillable = ['investment_id','customer_id','is_signed','created_at','updated_at'];
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
