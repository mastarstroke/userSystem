<?php

namespace App\Http\Controllers;

use Mail;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\EmailVericationMail;
use Illuminate\Auth\Events\Registered;
use App\Repository\IRegisterRepository;
 

class RegisterController extends Controller
{
    protected $user;

    public function __construct(IRegisterRepository $user)
    {
        $this->user = $user;
    }

    public function register()
    {
        return view("register");
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'photo' => 'required|image|mimes:jpeg,jpg,png,bmp',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $user = $this->user->storeOrUpdate($id = null, $data);

        $email = $request->email;
        
        $sendEmails = sendEmail($email, $user); //'sendmail' heper fucntion for sending mail

        return $sendEmails;

    }

    public function verify_email($verification_code)
    {
        $verifyEmails = verifyEmail($verification_code); //'verifyEmail' heper fucntion for sending mail

        return $verifyEmails;
    }

}