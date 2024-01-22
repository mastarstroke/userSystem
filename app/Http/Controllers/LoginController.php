<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Repository\ILoginRepository;

class LoginController extends Controller
{
    protected $user;

    public function __construct(ILoginRepository $user)
    {
        $this->user = $user;
    }
    
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|min:8'
        ]);

        
        $this->user->loginOrBounce($data);
        return redirect('dashboard/user');
        
    }

    public function logout()
    {
        /** @var User $user */
        $user = Auth::user();

        // Revoke the token that was used to authenticate the current request...
        $user->currentAccessToken()->delete();
    }
}
