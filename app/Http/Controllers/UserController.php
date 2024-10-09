<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request, User $user)
    {
        $user->update([
            'width' => $request->width,
            'height' => $request->height,
            'address' => $request->address
        ]);
        return response()->json([
            'message' => 'user has been updated successfully',
            'user' => $user
        ]);
    }
    public function checkEmail($email)
    {
        $check = User::where('email', $email)->get();
        return response()->json($check);
    }
}
