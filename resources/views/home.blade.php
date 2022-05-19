@extends('navtemplate')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Witamy!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @auth
                    {{ __('Jesteś zalogowany.') }}
                    @endauth

                    @guest
                    {{ __('Zaloguj się, aby móc w pełni korzystać z aplikacji!') }}
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
