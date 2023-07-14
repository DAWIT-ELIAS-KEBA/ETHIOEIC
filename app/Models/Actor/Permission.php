<?php

namespace App\Models\Actor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table="permissions";
    protected $id="id";
    protected $fillable = [
        'name', "created_at", 	"updated_at"
    ];
}
