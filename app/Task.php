<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // public function isComplete()
    // {
    //   return false;
    // }

    // public static function incomplete()
    // {
    //   return static::where('completed', 0)->get();
    // }

    public function scopeIncomplete($query) //Task::incomplete()
    {
      return $query->where('completed', 0);
    }
}
