@extends('layouts.app')
@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <h1>Iniciar Sesión</h1>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" placeholder="Email" value="{{ old('email') }}" name="email" required />
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" placeholder="Password" value="{{ old('password') }}" name="password" required />
        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group">
        <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar contraseña
        </label>
    </div>
    <div>
        <button type="submit" class="btn btn-default">Iniciar Sesión</button>
        <a class="reset_pass" href="{{ route('password.request') }}">¿Perdistes tu contraseña?</a>
    </div>
    @endsection
