<?php

namespace App\Http\Controllers\MitraAuth;

use App\Mitra;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use DB;
use Mail;
use Auth;

class RegisterController extends Controller
{

    protected $redirectPath = '/';

	public function showRegistrationForm()
	{
		return view('auth.register-mitra');
	}

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $mitra = $this->create($request->all());

        $this->guard()->login($mitra);

        return redirect($this->redirectPath);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        return Mitra::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            ''
        ]);
    }  

   protected function guard()
   {
       return Auth::guard('mitras');
   }

}
