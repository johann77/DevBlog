@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card p-b-5">
                <div class="card-content">
                    <h1 class="title has-text-centered">
                        Logowanie
                    </h1>
                    <form action="{{ route('login') }}" method="POST" role="form">
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

                        <div class="field">
                            <label for="password" class="label">Hasło</label>
                            <p class="control">
                                <input type="text" name="password" id="password" type="password" placeholder="sekretne hasło"
                                    class="input {{ $errors->has('password') ? 'is-danger' : '' }}">
                            </p>
                            @if($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>

                        <b-checkbox name="remember" class="m-t-10">Zapamiętaj mnie</b-checkbox>

                        <button class="button is-primary is-outlined is-fullwidth m-t-20">Zaloguj</button>
                    </form>
                </div>
            </div>
            <p class="has-text-centered m-t-20"><a href="{{ route('password.request') }}" class="is-muted">Zmień
                    hasło</a></p>
        </div>
    </div>
</div>



{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
