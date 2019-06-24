<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\App;

class Review extends Model
{
    //
        public function reviews(){
        return $this->belongsTo(Car::class);
    }
}
