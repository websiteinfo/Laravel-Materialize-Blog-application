@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col s12 m6 offset-m3"><br>
            <div class="card">
                <div class="card-content">
                    <h3> {{ __('Login') }}</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                        <div class="input-field col s12">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                                <p>
                                  <label>
                                    <input type="checkbox" {{ old('remember') ? 'checked' : '' }} />
                                    <span>{{ __('Remember Me') }}</span>
                                  </label>
                                </p>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col m8">
                                <button type="submit" class="waves-effect waves-light btn blue darken-2">
                                    {{ __('Login') }}
                                </button>

                                <a class="waves-effect waves-light btn blue darken-2" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
