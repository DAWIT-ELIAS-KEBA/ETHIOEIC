<?php

namespace App\Models\Service;

use App\Models\Actor\Customer;
use App\Models\Letter\Letter;

use App\Models\Actor\User;
use App\Models\Investment\Investment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VipService extends Model
{
    use HasFactory;
    protected $table='vip_service';
    protected $id='id';
    protected $fillable = ['service_type_id','investment_id','customer_id','landing_date','letter_id',
                            'reviewed_by','review_status','approved_by','approve_status','approved_date',
                            'created_at','updated_at'];
    public function ServiceType()
    {
        return $this->belongsTo(VipServiceType::class,'service_type_id','id');
    }
    public function Investment()
    {
        return $this->belongsTo(Investment::class,'investment_id','id');
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
    public function Letter()
    {
        return $this->belongsTo(Letter::class,'letter_id','id');
    }
    public function ReviewedBy()
    {
       return $this->belongsTo(User::class,'reviewed_by','id');
    }
    public function ApprovedBy()
    {
       return $this->belongsTo(User::class,'approved_by','id');
    }
}
