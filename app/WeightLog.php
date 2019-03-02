<?php

namespace App;

class WeightLog extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
}
