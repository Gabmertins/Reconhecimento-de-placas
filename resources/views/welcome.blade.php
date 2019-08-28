@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Bem vindo!') }}</h1>
                        <p class="text-lead text-light">
                            {{ __('Você está prestes a conhecer a mais nova revolução na área de inteligencia arficiail by 8bit.') }}
                        </p>
                        <div >
                        <h6>
                            <button href="{{ route('login') }}">{{ _('Fazer login') }}</button>
                        </h6>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
