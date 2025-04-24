@extends('layouts.app')

@section('content')
<div class="auth-container">
    <div class="card">
        <div class="card-header">{{ __('Restablecer Contraseña') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-unab">
                        {{ __('Enviar Enlace de Restablecimiento') }}
                    </button>
                </div>

                <div class="text-center mt-3">
                    <a class="btn-link-unab" href="{{ route('login') }}">
                        {{ __('Volver al inicio de sesión') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection