@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 text-center d-flex justify-content-center align-items-center">

            <div class="box-form-auth pl-5" id="box-form-register">
                    <div class="">
                        <img class="img-fluid" src="{{asset('images/logo.png')}}">
                    </div>
                    <p class="box-form-auth-title mt-5 ml-1 font-montserrat font-montserrat-500">Acesse o seu e-mail para confirmar a sua conta</p>
                    <p class="box-form-auth-sub-title ml-1 font-montserrat font-montserrat-500">Enviamos um link de confirmação de sua conta para o seu e-mail.</p>
                    <div class="pl-3">

                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                Enviamos um novo e-mail de confirmação para você.
                            </div>
                        @endif

                        <div class="form-group row">
                            <div class="col-md-12 p-1 text-center">
                                <a href="{{route('painel.home')}}" class="border-0 btn-submit btn btn-primary btn-block d-flex justify-content-center align-items-center" id="btn-confirm-account">
                                    Já fiz a confirmação do e-mail
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 p-1 text-center">

                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn-submit-google btn btn-primary btn-block d-flex justify-content-center align-items-center">Reenviar e-mail</button>.
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 background-image-auth text-center align-middle pt-5">
                <img class="img-fluid image-auth" src="{{asset('images/image-auth.png')}}" />
            </div>
        </div>
    </div>
@endsection
<style lang="css">
    #btn-confirm-account{
        background-color: #6290B3;
        color: #ffffff;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {

        $('#btn-account-create').prop("disabled", true);
        $('#box-form-register-loading').hide();
        $('#termRadio').click(function(){
            if($(this).val()){
                $('#btn-account-create').prop("disabled", false);
            }
        })

    });

</script>
