<?php

namespace App\Models\Letter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterCode extends Model
{
    use HasFactory;
    protected $table='letter_code';
    protected $id='id';
    protected $fillable = ['code' /* willl given by developer for code*/, 'description',
                           'letter_type' /*incoming or outgoing */, 'with_whom' /* investor or stakeholder */,
                           'created_at','updated_at'];

}
