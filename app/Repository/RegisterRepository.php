<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\RegisterRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;


class RegisterRepository implements IRegisterRepository
{
    protected $user = null;

    public function storeOrUpdate($id = null, $data = [])
    {
        if(is_null($id)) {
            $user = new User;
            $user->name = $data["name"];
            $user->email = $data["email"];
            $user->password = Hash::make("password");
            $user->email_verification_code = Str::random(40);

            if($file = $data["photo"])
            {
                $photoName=time().'.'.$file->getClientOriginalExtension();
                $data["photo"]->move('usersphoto', $photoName);
                $user->photo = $data["photo"];
            }
            $user->save();

            $user->createToken('main')->plainTextToken;

            return $user;
        }

        else{
            $user = User::find($id);
            $user->name = $data["name"];
            $user->email = $data["email"];
            $user->password = Hash::make("password");
    
            if($file = $data["photo"])
            {
                $photoName=time().'.'.$file->getClientOriginalExtension();
                $data["photo"]->move('usersphoto', $photoName);
                $user->photo = $data["photo"];
            }
            $user->upadte();
    
            return $user;
        }

    } 
}