@extends('layouts.app', ['page' => __('Gerenciamento de usuários'), 'pageSlug' => 'users'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Editar Usuário') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('user.index') }}" class="btn btn-sm btn-default">{{ __('Voltar a lista') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('user.update', $user) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Informações do usuário') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', $user->name) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>
                                <div class="row">
                  <div class=" col-6 form-group{{ $errors->has('cpf') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-cpf">{{ __('CPF') }}</label>
                                    <input type="text" name="cpf" id="input-cpf" class="form-control form-control-alternative{{ $errors->has('cpf') ? ' is-invalid' : '' }}" placeholder="{{ __('CPF') }}" value="{{ old('cpf', $user->cpf) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'cpf'])
                                </div>
                                <div class=" col-6 form-group{{ $errors->has('placa') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-placa">{{ __('Placa do Veículo') }}</label>
                                    <input type="text" name="placa" id="input-placa" class="form-control form-control-alternative{{ $errors->has('placa') ? ' is-invalid' : '' }}" placeholder="{{ __('Placa do Veículo') }}" value="{{ old('placa', $user->placa) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'placa'])
                                </div>
</div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', $user->email) }}" required>
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Password') }}</label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" value="">
                                    @include('alerts.feedback', ['field' => 'password'])
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm Password') }}" value="">
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-default mt-4">{{ __('Salvar') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
