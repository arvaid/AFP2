<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\Builder;

/**
 * @method static Builder inRandomOrder()
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, Uuids;

    protected $fillable = [
        'username', 'email'
    ];

    public function answers(){
        return $this->hasMany(Answer::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
