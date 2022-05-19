<?php

namespace App\Http\Controllers;

use App\Models\Mass;
use App\Models\User;
use App\Repositories\MassRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MassController extends Controller
{
    public function index(UserRepository $userRepo, MassRepository $massRepo) {
        $id = Auth::id();

        $user = $userRepo->find($id);
        $mass = $massRepo->getAll($id);

        return view('mass', [
            'user' => $user,
            'mass' => $mass
        ]);
    }

    public function massStore(Request $request) {
        $mass = new Mass();

        $mass->user_id = $request->input('user_id');

        $mass->weight = $request->input('weight');
        $mass->date = $request->input('massDate');

        $mass->save();

        return redirect()->back();
    }

}
