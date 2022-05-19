<?php

namespace App\Http\Controllers;

use App\Models\Mass;
use App\Models\Training;
use App\Repositories\MassRepository;
use App\Repositories\TrainingListRepository;
use App\Repositories\TrainingRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TrainingController extends Controller
{
    public function index(UserRepository $userRepo, TrainingRepository $trainingRepo, TrainingListRepository $trainingListRepo) {
        $id = Auth::id();

        $user = $userRepo->find($id);
        $trainings = $trainingRepo->getAll($id);
        $exercises = $trainingListRepo->getTrainingList();

        return view('training', [
            'user' => $user,
            'trainings' => $trainings,
            'exercises' => $exercises
        ]);
    }

    public function trainingStore(Request $request) {
        $training = new Training();

        $training->user_id = $request->input('user_id');
        $training->training_list_id = $request->input('training_list_id');
        $training->date = $request->input('trainingDate');

        $training->save();

        return redirect()->back();
    }
}
