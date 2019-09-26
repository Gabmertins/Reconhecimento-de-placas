@extends('layouts.app', ['page' => __('Perfil do usuário'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ _('Editar perfil') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ _('Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ _('Name') }}" value="{{ old('name', auth()->user()->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ _('E-mail') }}</label>
                                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ _('E-mail') }}" value="{{ old('email', auth()->user()->email) }}">
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>

                            <div class="form-group{{ $errors->has('cpf') ? ' has-danger' : '' }}">
                                <label>{{ _('CPF') }}</label>
                                <input type="text" name="cpf" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" placeholder="{{ _('CPF') }}" value="{{ old('cpf', auth()->user()->cpf) }}">
                                @include('alerts.feedback', ['field' => 'cpf'])
                            </div>

                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-fill btn-default ">{{ _('Salvar') }}</button>
                    </div>
                </form>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ _('Informações do veículo') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('placa') ? ' has-danger' : '' }}">
                                <label>{{ _('Placa do veículo') }}</label>
                                <input type="text" name="placa" class="form-control{{ $errors->has('placa') ? ' is-invalid' : '' }}" placeholder="{{ _('Placa do veículo    ') }}" value="{{ old('placa', auth()->user()->placa) }}">
                                @include('alerts.feedback', ['field' => 'placa'])
                            </div>

                    </div> 
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-fill btn-default">{{ _('Salvar') }}</button>
                    </div>
                </form>
            </div>


            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ _('Senha') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        @method('put')

                        @include('alerts.success', ['key' => 'password_status'])

                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                            <label>{{ __('Senha atual') }}</label>
                            <input type="password" name="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('senha atual') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'old_password'])
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label>{{ __('Nova senha') }}</label>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Nova senha') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="form-group">
                            <label>{{ __('Confirmar nova senha') }}</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirmar nova senha') }}" value="" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-fill btn-default">{{ _('Redefinir senha') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                         
                        </div>
                    </p>
                    <div class="card-description">
                   
                </div>
               
                </div>
            </div>
        </div>
    </div>
@endsection
