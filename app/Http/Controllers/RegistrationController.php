<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\ConfirmationMAil;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{

	public function create(){

		return view('registration.create');

	}

    public function store(RegistrationRequest $request)
    {

    	 //create and save the user
		$user = User::create([
			'name' => request('name'),
			'email' => request('email'),
			'password' => Hash::make(request('password'))
		]);

		//sign in

		auth()->login($user);

		//send an email

		\Mail::to($user)->send(new ConfirmationMail($user));

		//redirect to the homepage
		session()->flash('message', 'Thanks for sign in up');
		return redirect()->home();
		
    }
}
