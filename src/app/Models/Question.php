<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['question_text', 'topic_id'];

    public function answers(){
        return $this->hasMany(Answer::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function topic(){
        return $this->belongsTo(Topic::class);
    }
}
