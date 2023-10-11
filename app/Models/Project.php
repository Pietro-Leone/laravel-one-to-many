<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts =[
        "release" => "date",
    ];

    protected $fillable = [
        "title",
        "slug",
        "description",
        "type_id",
        "thumb",
        "release",
        "language",
        "link",
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
