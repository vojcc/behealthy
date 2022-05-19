<?php

namespace App\Http\Controllers;

use App\Models\Mass;
use App\Models\User;
use App\Repositories\MassRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request) {

        $user = new User;

        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save();
        return redirect()->route('login');
    }

    public function index(UserRepository $userRepo) {
        $id = Auth::id();
        $user = $userRepo->find($id);

        return view('index', [
            "user" => $user,
        ]);
    }
}
