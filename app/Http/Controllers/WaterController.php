<?php

namespace App\Http\Controllers;

use App\Models\Mass;
use App\Models\Water;
use App\Repositories\MassRepository;
use App\Repositories\UserRepository;
use App\Repositories\WaterRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WaterController extends Controller
{
    public function index(UserRepository $userRepo, WaterRepository $waterRepo) {
        $id = Auth::id();

        $user = $userRepo->find($id);
        $water = $waterRepo->getAll($id);

        return view('water', [
            'user' => $user,
            'water' => $water
        ]);
    }

    public function waterStore(Request $request) {
        $water = new Water();

        $water->user_id = $request->input('user_id');

        $water->water_amount = $request->input('water_amount');
        $water->date = $request->input('waterDate');

        $water->save();

        return redirect()->back();
    }
}
