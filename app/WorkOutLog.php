<?php

namespace App;

class WorkOutLog extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
}
