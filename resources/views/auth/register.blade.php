@extends('layouts.app', ['class' => 'register-page', 'page' => _('Registro'), 'contentClass' => 'register-page'])

@section('content')
    <div class="row">
        <div class="col-lg-12 ">
        <div class="col-lg-7  ml-auto mr-auto">
            <div class="card card-white">
                <div class="card-header">
                    <h1 class="text-default text-center mt-2">{{ _('Registro') }}</h1>
                </div>
                <form class="form" method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="card-body">
                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ _('Nome') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <div class="row">
                        <div class="col-6 input-group{{ $errors->has('cpf') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                </div>
                            </div>
                            <input type="text" name="cpf" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" placeholder="{{ _('CPF') }}">
                            @include('alerts.feedback', ['field' => 'cpf'])
                        </div>
                        
                        <div class="col-6 input-group{{ $errors->has('placa') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                </div>
                            </div>
                            <input type="text" name="placa" class="form-control{{ $errors->has('placa') ? ' is-invalid' : '' }}" placeholder="{{ _('Placa do veículo') }}">
                            @include('alerts.feedback', ['field' => 'placa'])
                        </div>
                        </div>
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
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ _('Senha') }}">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ _('Confirmar senha') }}">
                        </div>
                        <div class="form-check text-left">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign"></span>
                                {{ _('Eu aceito os') }}
                                <a href="">{{ _('termos e condições') }}</a>.
                            </label>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button  href="/home" class="btn btn-danger mb-3 ">{{ _('Voltar') }}</button>
                        <button type="submit" class="btn btn-default mb-3 ">{{ _('Registrar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
