<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    
    protected $fillable= ['make','model','product_on'];
    protected $primaryKey = 'id';

    public function cars(){
        return $this->hasMany(Review::class);
    }
}
