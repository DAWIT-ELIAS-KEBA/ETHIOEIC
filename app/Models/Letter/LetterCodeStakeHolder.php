<?php

namespace App\Models\Letter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Actor\User;
use App\Models\Actor\Stakeholder;

class LetterCodeStakeHolder extends Model
{
    use HasFactory;
    protected $table='letter_code_stakeholders';
    protected $id='id';
    protected $fillable = ['letter_code_id','stakeholder_id','added_by','created_at','updated_at'];
    public function LetterCode()
    {
        return $this->belongsTo(LetterCode::class,'letter_code_id','id');
    }
    public function Stakeholder()
    {
        return $this->belongsTo(Stakeholder::class,'stakeholder_id','id');
    }
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
}
