<?php

namespace App\Repository;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

interface ILoginRepository
{
    public function loginOrBounce($id = null, $collection = []);
}