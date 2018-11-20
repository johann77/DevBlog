@extends('layouts.app')

@section('content')

<div class="container">
     @if (session('status'))
        <div class="notification is-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card p-b-5">
                <div class="card-content">
                    <h1 class="title has-text-centered">
                    Zmienić hasło?
                    </h1>
                    <form action="{{ route('password.email') }}" method="POST" role="form">
                        {{ csrf_field() }}
                        <div class="field">
                            <label for="email" class="label">Adres Email</label>
                            <p class="control">
                                <input type="text" name="email" id="email" type="email" placeholder="email@email.pl"
                                    class="input {{ $errors->has('email') ? 'is-danger' : '' }}" value="{{ old('email') }}">
                            </p>
                            @if($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <button class="button is-primary is-outlined is-fullwidth m-t-20">Resetuj hasło</button>
                    </form>
                </div>
            </div>
            <p class="has-text-centered m-t-20"><a href="{{ route('login') }}" class="is-muted">Powrót do logowania</a></p>
        </div>
    </div>
</div>

@endsection
