<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Controller
{
    public function table () {
        if (!Schema::hasTable('products1')) {
            Schema::create('products1', function($table) {
                $table -> increments('id');
                $table -> String('name');
                $table -> String('image');
                $table -> string('description');
                $table -> integer('quantity');
                $table -> date('date');
                $table -> timestamps();
            });
        }
        if (!Schema::hasTable('products2')) {
            Schema::create('products2', function($table) {
                $table -> increments('id');
                $table -> string('name');
                $table -> string('image');
                $table -> string('description');
                $table -> integer('quantity');
                $table -> date('date');

            });
        }
        echo 'Tạo bảng thành công';
    }
}
