<?php

namespace App\Models\Letter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\User;

class LetterTemplate extends Model
{
    use HasFactory;
    protected $table='letter_template';
    protected $id='id';
    protected $fillable = ['letter_code_stackholder_id','added_by','subject','created_at','updated_at'];
    public function LetterCodeStakeholder()
    {
        return $this->belongsTo(LetterCodeStakeHolder::class,'letter_code_stackholder_id','id');
    }
    public function AddedBy()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
}

