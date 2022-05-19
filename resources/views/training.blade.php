@extends('navtemplate')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <form class="mass-form" id="massForm" action="{{ route('trainingStore') }}" method="POST" role="form">
                @isset($user)
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <input type="hidden" name="user_id" value="{{ $user->id}}">
                @endisset
                <h1>Wybierz trening: </h1>
                <div class="input-group">
                    <select class="form-select" aria-label="Default select example" name="training_list_id">
                        <option selected>Wybierz rodzaj treningu</option>

                        @foreach($exercises as $exercise)
                        <option value="{{ $exercise->id }}">{{ $exercise->name }} - {{ $exercise->duration }} min.</option>
                        @endforeach

                    </select>
                </div>

                <form>
                    <h1>Podaj datę: </h1>
                    <input type="date" name="trainingDate">
                    <span class="input-info-danger" id="inputTrainingError"></span>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Dodaj</button>
                    </div>
                </form>
            </form>
        </div>

        <div class="col-lg-2"></div>

        <div class="col-lg-5 list-margin">
            <ul class="mass-list" id="trainingList">
                <h1>Trening:</h1>

                @if (is_array($trainings) || (is_object($trainings)))
                    @foreach ($trainings as $training)
                        <li>
                            @foreach($exercises as $exercise)
                            @if($training->training_list_id == $exercise->id)
                                {{ $exercise->name }} - {{ $exercise->duration }} min.
                            @endif
                            @endforeach
                            <br>
                            {{ $training->date }}
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>


@endsection



