<?php

namespace App\Models\Letter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateBody extends Model
{
    use HasFactory;
    protected $table='Table_name';
    protected $id='id';
    protected $fillable = ['template_id','description','created_at','updated_at'];
    public function template()
    {
        return $this->belongsTo(LetterTemplate::class,'template_id','id');
    }
}
