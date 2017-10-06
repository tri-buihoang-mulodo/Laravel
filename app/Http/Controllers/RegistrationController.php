<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegistrationForm;


class RegistrationController extends Controller
{
    public function create(){
    	return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
    	// Validate the form
    	// $this->validate(request(),[
    	// 	'name' => 'required',
    	// 	'email' => 'required|email',
    	// 	'password' => 'required|confirmed'    		
    	// ]);

    	// Create and save user
    	// $user = User::create(request(['name','email','password']));
        // $user = User::create([
        //     'name' => request('name'),
        //     'email'=> request('email'),
        //     'password'=> bcrypt(request('password'))
        // ]);

    	// Sign them in
    	// auth()->login($user);

        // lesson 26
        // \Mail::to($user)->send(new Welcome($user));

    	// Redirect to the home page
        $form->persist();
    	return redirect()->home();
    }
}
