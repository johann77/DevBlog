@extends('layouts.app')

@section('content')
<div class="container">

    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card p-b-5">
                <div class="card-content">
                    <h1 class="title has-text-centered">
                        Rejestracja
                    </h1>
                    <form action="{{ route('register') }}" method="POST" role="form">
                        {{ csrf_field() }}
                        <div class="field">
                            <label for="name" class="label">Imię | nick</label>
                            <p class="control">
                                <input type="text" name="name" id="name" type="text" placeholder="imię lub nick" class="input {{ $errors->has('name') ? 'is-danger' : '' }}"
                                    value="{{ old('name') }}" required>
                            </p>
                            @if($errors->has('name'))
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label for="email" class="label">Adres Email</label>
                            <p class="control">
                                <input type="text" name="email" id="email" type="email" placeholder="email@email.pl"
                                    class="input {{ $errors->has('email') ? 'is-danger' : '' }}" value="{{ old('email') }}"
                                    required>
                            </p>
                            @if($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label for="password" class="label">Hasło</label>
                            <p class="control">
                                <input name="password" id="password" type="password" placeholder="sekretne hasło" class="input {{ $errors->has('password') ? 'is-danger' : '' }}"
                                    required>
                            </p>
                            @if($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label for="password_confirmation" class="label">Powtórz Hasło</label>
                            <p class="control">
                                <input name="password_confirmation" id="password_confirmation" type="password"
                                    placeholder="powtórz sekretne hasło" class="input {{ $errors->has('password') ? 'is-danger' : '' }}"
                                    required>
                            </p>
                            @if($errors->has('password_confirmation'))
                            <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                            @endif
                        </div>

                        <button class="button is-primary is-outlined is-fullwidth m-t-20">Rejestruj</button>
                    </form>
                </div>
            </div>
            <p class="has-text-centered m-t-20"><a href="{{ route('login') }}" class="is-muted">Masz juz konto?</a></p>
        </div>
    </div>

</div>
@endsection
