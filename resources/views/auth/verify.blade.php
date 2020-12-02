@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verica tu dirección de correo electrónico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link de verificación ha sido enviado a tu dirección de correcto electrónico.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, revisa tu bandeja de correo electrónico para la verificación.') }}
                    {{ __('Si no recibiste correo') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Reenviar link de verificación') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
