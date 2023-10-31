<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'preview_img',
        'body',
        'author'
    ];

    // protected $guard = '';

    public function user(){
        return $this->belongsTo(User::class);
    }

}
