@extends('navtemplate')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <form class="mass-form" id="massForm" action="{{ route('massStore') }}" method="POST" role="form">
                @isset($user)
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <input type="hidden" name="user_id" value="{{ $user->id}}">
                @endisset
                <h1>Podaj wagę: </h1>
                <div class="input-group">
                    <input type="number" step="0.01" class="form-control" name="weight">
                    <div class="input-group-append">
                        <span class="input-group-text">kg</span>
                    </div>
                </div>

                <form>
                    <h1>Podaj datę: </h1>
                    <input type="date" name="massDate">
                    <span class="input-info-danger" id="inputMassError"></span>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Dodaj</button>
                    </div>
                </form>

            </form>
        </div>

        <div class="col-lg-2"></div>

        <div class="col-lg-5 list-margin">
            <ul class="mass-list" id="massList">
                <h1>Waga:</h1>

            @if (is_array($mass) || (is_object($mass)))
                @foreach ($mass as $mass_item)
                    <li>{{ $mass_item->weight }} kg
                    <br>
                    {{ $mass_item->date }}
                    </li>
                @endforeach
            @endif

            </ul>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-12">
            <canvas id="myChart"></canvas>
        </div>

        <script>
            let myChart = document.getElementById('myChart').getContext('2d');
            let massList = [];
            let massDate = [];

            @foreach($mass as $mass_item)
                massList.push('{{$mass_item->weight}}');
                massDate.push('{{$mass_item->date}}');
            @endforeach

            let massChart = new Chart(myChart, {
                type: 'line', //bar, horizontalBar, pie, line, doughnut, radar, polarArea
                data: {
                    labels: massDate,
                    datasets: [{
                        label: 'Waga',
                        data: massList,
                        backgroundColor: '#7da7ca',
                    }],
                },
            });
        </script>
    </div>
</div>
@endsection
