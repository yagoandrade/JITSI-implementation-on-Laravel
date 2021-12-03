@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 d-flex justify-content-center align-items-center">

                @if (session('status'))
                    <div class="box-form-auth text-center" id="box-form-email-sucess" >
                        <div class="">
                            <img class="img-fluid" src="{{asset('images/logo.png')}}">
                        </div>
                        <p class="box-form-auth-title mt-5 ml-1">Sua senha foi alterada!</p>
                        <p class="box-form-auth-sub-title ml-1">Você fez a alteração da sua senha, faça login com a nova senha para acessar sua conta.</p>
                        <a href="{{route('login')}}">Fazer login</a>
                    </div>
                @else
                    <div class="box-form-auth pt-5" id="box-form-login">
                        <div class="text-center">
                            <img class="img-fluid" src="{{asset('images/logo.png')}}">
                        </div>
                        <p class="box-form-auth-title mt-5 ml-1 text-center">Redefinir sua senha</p>

                        @include('partials.flash-messages')
                        @include('partials.error-block')

                        <div class="pl-3">
                            <form method="POST" id="form-login" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group row">

                                    <div class="col-md-12 p-1">
                                        <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" required>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-12 p-1">
                                        <input id="password" type="password" placeholder="Senha" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-12 p-1">
                                        <input id="password-confirm" placeholder="Confirmação de senha" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required>
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <p class="instructions-password">
                                            A senha deve atender aos seguintes requisitos:<br>
                                            *Mínimo, 8 caracteres<br>
                                            *Incluir números e letras maiúsculas e minúsculas<br>
                                            *Incluir um caractere especial que não seja letra nem número
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 p-1 text-center">
                                        <button type="submit" class="border-0 btn-submit btn btn-primary btn-block">
                                            Confirmar redefinição de senha
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-7 background-image-auth text-center pt-5">
                <img class="img-fluid image-auth" src="{{asset('images/image-auth.png')}}" />
            </div>
        </div>
    </div>
@endsection
