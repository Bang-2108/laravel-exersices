<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    
    public function type_product() {
        return $this -> belongsTo('App\TypeProduct', 'id_type', 'id');
    }
}
