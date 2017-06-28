@extends('layouts.app')
@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
    {{ csrf_field() }}
    <h1>Resetear contraseña</h1>
    <div>
        <input type="email" class="form-control" placeholder="Email" name="email" required />
    </div>
    <div>
        <input type="password" class="form-control" placeholder="Email" name="password" required />
    </div>
    <div>
        <input type="password" class="form-control" placeholder="Email" name="password_confirmation" required />
    </div>
    <div>
        <a class="reset_pass" href="{{ route('login') }}">Volver al Login</a>
        <button type="submit" class="btn btn-default">Enviar link</button>
    </div>
@endsection
