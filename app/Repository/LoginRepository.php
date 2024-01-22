<?php

namespace App\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Repository\LoginRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class LoginRepository implements ILoginRepository
{
    protected $user = null;

    public function loginOrBounce($id = null, $data = [])
    {
        if (!Auth::attempt($data)) {
            return redirect("/")->with("error","Details not correct!");
        }
        else{
            $user = Auth::user();
            
            $user->createToken('main')->plainTextToken;
        }
        

        return $user;
    } 
}