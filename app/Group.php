<?php

namespace App;

class Group extends Model
{
    public function users() {
        return $this->belongsToMany(User::class);
    }
}
