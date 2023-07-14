<?php

namespace App\Models\Letter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\User;
use App\Models\Actor\Stakeholder;
use App\Models\Investment\Investment;
class Letter extends Model
{
    use HasFactory;
    protected $table='letters';
    protected $id='id';
    protected $fillable = ['letter_code_id' , 'prepared_by' , 'approved_by' , 'stakeholder_sender_id' ,
                             'stakeholder_reciever_id' , 'investment_sender_id' , 'investment_reciever_id' ,
                              'ref_no' , 'view_status' , 'comment' , 'letter_path' , 'created_at' , 'updated_at'];
    public function LetterCode()
    {
        return $this->belongsTo(LetterCode::class,'letter_code_id','id');
    }
    public function PreparedBy()
    {
        return $this->belongsTo(User::class,'prepared_by','id');
    }
    public function ApprovedBy()
    {
        return $this->belongsTo(User::class,'approved_by','id');
    }
    public function SenderStakeholder()
    {
        return $this->belongsTo(Stakeholder::class,'stakeholder_sender_id','id');
    }
    public function RecieverStakeholder()
    {
        return $this->belongsTo(Stakeholder::class,'stakeholder_reciever_id','id');
    }
    public function SenderInvestment()
    {
        return $this->belongsTo(Investment::class,'investment_sender_id','id');
    }
    public function RecieverInvestment()
    {
        return $this->belongsTo(Investment::class,'investment_reciever_id','id');
    }
}
