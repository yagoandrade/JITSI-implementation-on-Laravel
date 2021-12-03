@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 text-center d-flex justify-content-center align-items-center">
                @if (session('status'))
                    <div class="box-form-auth text-center" id="box-form-email-sucess" >
                        <div class="">
                            <img class="img-fluid" src="{{asset('images/logo.png')}}">
                        </div>
                        <p class="box-form-auth-title mt-5 ml-1">Verifique sua caixa de e-mail</p>
                        <p class="box-form-auth-sub-title ml-1">Caso você tenha uma conta vinculada ao e-mail informado, você receberá um e-mail com um link para redefinição da sua senha.</p>
                        <button type="button" onclick="location.href = '{{route('login')}}';" class="border-0 btn-submit btn btn-primary btn-block btn-blue">
                            Voltar para a página de login
                        </button>
                    </div>
                @else
                <div class="box-form-auth pt-5" id="box-form-email">
                    <div class="">
                        <img class="img-fluid" src="{{asset('images/logo.png')}}">
                    </div>
                    <p class="box-form-auth-title mt-5 ml-1">Esqueceu sua senha?</p>
                    <p class="box-form-auth-sub-title ml-1">Preencha o endereço de e-mail usado em sua conta, em seguida
                        enviaremos às instruções para redefinição de senha</p>
                    <div class="pl-3">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group row">

                                <div class="col-md-12 p-1">
                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid border-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 p-1 text-center">
                                    <button type="submit" class="border-0 btn-submit btn btn-primary btn-block btn-blue">
                                        Enviar redefinição de senha
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
