@extends('layouts.app', ['class' => 'login-page', 'page' => _('Login'), 'contentClass' => 'login-page'])

@section('content')
    <div class="col-lg-5 col ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf

            <div class="card card-white ">
                <div class="card-header ml-auto mr-auto ">
                <h1 class="text-default text-center mt-2">{{_('Login') }}</h1>
                </div>
                <div class="card-body">
                    <p class="text-default mb-2">Entre com seu e-mail e senha</p>
                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ _('E-mail') }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="{{ _('Senha') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-default btn-lg btn-block mb-3">{{ _('Entrar') }}</button>
                    <div class="pull-left">
                        <h6>
                            <a href="{{ route('register') }}">{{ _('Criar uma conta') }}</a>
                        </h6>
                    </div>
                    <div class="pull-right">
                        <h6>
                            <a href="{{ route('password.request') }}">{{ _('Esqueceu sua senha?') }}</a>
                        </h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
