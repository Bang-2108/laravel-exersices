<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests;
use Input, File;
use Request;
use App\Http\Requests\SignupRequest;

class SignupController extends Controller
{
    public function index() {
        return view ('signup');
    }
    public function displayInfor(SignupRequest $REQUEST) {
        $user = [
            'name' => $name = $REQUEST -> input('name'),
            'age' => $age = $REQUEST -> input('age'),
            'date' => $date = $REQUEST -> input('date'),
            'phone' => $phone = $REQUEST -> input('phone'), 
            'web' => $web = $REQUEST -> input('web'),
            'address' => $address = $REQUEST -> input('address'),
        ];
        return view('signup') -> with('user', $user);
    }
}
