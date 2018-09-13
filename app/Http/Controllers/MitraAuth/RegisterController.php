<?php

namespace App\Http\Controllers\MitraAuth;

use App\User;
use App\UserRole;
use App\Partner;
use App\Album;
use App\FasilitasPartner;
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
        return view('auth.register-partner');
    }

    public function showLoginForm()
    {
        return view('auth.login-partner');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|min:10|max:14',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $user->save();

        $partner = New Partner();
        $partner->user_id = $user->id;
        $partner->save();

        $album = New Album();
        $album->user_id = $user->id;
        $album->save();

        $fasilitas = New FasilitasPartner();
        $fasilitas->user_id = $user->id;
        $fasilitas->save();

        $userRole = UserRole::create([
            'role_id' => '3',
            'user_id' => $user['id'],
        ]);

        return $user;
    }

    public function register(Request $request)
    {
        $input = $request->all();
        $validator = $this->validator($input);

        if ($validator->passes()){
            $user = $this->create($input)->toArray();
            $user['link'] = str_random(30);

            DB::table('user_activations')->insert(['id_user'=>$user['id'],'token'=>$user['link']]);
            
            Mail::send('emails.activation-partner', $user, function($message) use ($user){
              $message->to($user['email']);
              $message->subject('Kupesan - Activation Code');
            });
            return redirect()->to('partner-ku/login')->with('success',"Activation link has been sent to your e-mail. Please click the link to activate your account.");
            ; 
        }
        return back()->with('errors',$validator->errors());
    }

    public function userActivation($token){
      $check = DB::table('user_activations')->where('token',$token)->first();
      if(!is_null($check)){
        $user = User::find($check->id_user);
        if ($user->is_activated ==1){
          return redirect()->to('partner-ku/login')->with('success',"Account active successfully. Please enter your e-mail and password to Log-In.");

        }
        $user->update(['is_activated' => 1]);
        DB::table('user_activations')->where('token',$token)->delete();
        return redirect()->to('partner-ku/login')->with('success',"Account active successfully, please enter your e-mail and password to Log-In.");
      }
      return redirect()->to('partner-ku/login')->with('Warning',"Your token is invalid");
    }

}
