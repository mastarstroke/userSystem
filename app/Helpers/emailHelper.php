<?php



if(!function_exists('sendEmail')){
    function sendEmail($email, $user)
    {
        \Mail::to($email)->send(new App\Mail\EmailVericationMail($user));

        return redirect('user/registered');
    }
}

if(!function_exists('verifyEmail')){
    function verifyEmail($verification_code)
    {
        $user = App\Models\User::where('email_verification_code', $verification_code)->first();
        if(!$user){
            return redirect()->back()->with('error','Invalid link');
        }else{

            if($user->email_verified_at){
                return redirect()->back()->with('error','Email already verified');
            }else{
                $user->email_verified_at = \Carbon\Carbon::now();
                $user->save();

                return redirect()->route('dashboard/user')->with('success','Email successfully verified'); 
            }
        }
    }
}





?>