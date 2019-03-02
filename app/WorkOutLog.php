<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOutLog extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
}
