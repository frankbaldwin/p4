<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model{

    public function user() {
         # Round belongs to User
         # Define an inverse one-to-many relationship.
         return $this->belongsTo('\App\User');
    }

}
