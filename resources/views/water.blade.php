@extends('navtemplate')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <form class="mass-form" id="massForm" action="{{ route('waterStore') }}" method="POST" role="form">
                @isset($user)
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <input type="hidden" name="user_id" value="{{ $user->id}}">
                @endisset
                <h1>Podaj ilość wypitej wody: </h1>
                <div class="input-group">
                    <input type="number" step="0.01" class="form-control" name="water_amount">
                    <div class="input-group-append">
                        <span class="input-group-text">ml</span>
                    </div>
                </div>

                <form>
                    <h1>Podaj datę: </h1>
                    <input type="date" name="waterDate">
                    <span class="input-info-danger" id="inputWaterError"></span>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Dodaj</button>
                    </div>
                </form>
            </form>
        </div>

        <div class="col-lg-2"></div>

        <div class="col-lg-5 list-margin">
            <ul class="mass-list" id="waterList">
                <h1>Ilość wypitej wody:</h1>

                @if (is_array($water) || (is_object($water)))
                    @foreach ($water as $water_item)
                        <li>{{ $water_item->water_amount }} ml
                            <br>
                            {{ $water_item->date }}
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>
@endsection
