@extends('layouts.app', ['class' => 'login-page', 'page' => _('Recuperar senha'), 'contentClass' => 'login-page'])

@section('content')
    <div class="col-lg-5 col-md-7 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('password.email') }}">
            @csrf
            <div class="card  card-white">
                <div class="card-header">
                <h1 class="text-default text-center mt-2">Esqueceu sua senha?</h1>
                <p class="ml-2 mr-2 text-default">Não se preocupe: preencha seu endereço de e-mail abaixo, e iremos enviar um link para redefinir.</p>
                </div>
                <div class="card-body">
                    @include('alerts.success')

                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ _('E-mail') }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-default btn-lg btn-block mb-3 btn-round">{{ _('Enviar') }}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
