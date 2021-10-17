<?php

namespace App\Models\ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    public $append = ["image_path"];

    function getImagePathAttribute(){
        if($this->image){
            return asset("uploads/user/".$this->image);
        }
    }
}
