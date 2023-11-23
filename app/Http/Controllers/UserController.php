<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        $user = $request->input('user');

        return response()->json([
            'status' => true,
            'data' => [
                'user' => $user,
                'date' => date('Y-m-d'),
                'time' => date('H:i:s')
            ]
        ]);
    }
}
