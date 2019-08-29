@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Bem vindo ao Capture!') }}</h1>
                        <h4 class="text-lead text-light">
                            {{ __('Você está prestes a conhecer a mais nova revolução na área de inteligencia arficiail by 8bit.') }}
                        </h4>
                        <div >
                        <div>
                            <a class="btn btn-round btn-default btn-round btn-lg btn-block mb-3" href="{{ route('login') }}">{{ _('Fazer login') }}</a>
                            <a class="btn btn-round btn-default btn-round btn-lg btn-block mb-3" href="{{ route('register') }}">{{ ('Registrar-se') }}</a>
                         </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
