<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    protected function create() {
        $user = User::create();

        return response()->json($user->id);
    }
}
