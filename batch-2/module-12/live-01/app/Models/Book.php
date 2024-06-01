<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title'];
    protected $hidden = ['created_at','updated_at'];
    public function author(){
        return $this->belongsToMany(Author::class,'author__books');
    }
}
