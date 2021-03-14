<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'answer_text'
    ];

    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
