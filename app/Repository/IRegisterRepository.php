<?php

namespace App\Repository;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

interface IRegisterRepository
{
    public function storeOrUpdate($id = null, $collection = []);
}