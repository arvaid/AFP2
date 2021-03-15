<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

/**
 * @method static inRandomOrder()
 */
class Topic extends Model
{
    use HasFactory;

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
