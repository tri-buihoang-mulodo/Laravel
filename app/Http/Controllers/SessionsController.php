<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest',['except' => 'destroy']);
		$this->middleware('auth', ['only' => 'destroy']);		
	}

    public function create(){
    	return view('sessions.create');
    }

    public function store()
    {
    	// Attempt to authenticate the user
    	if(! auth()->attempt(request(['email','password']))){
    		return back()->withErrors([
    			'message' => 'Please check your credentials andtry agian'
    		]);
    	}

    	// if not,redirect back
    	// if so, sign them it
    	// Redirect to the home page.
		return redirect()->home();    	
    }

    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }
}
