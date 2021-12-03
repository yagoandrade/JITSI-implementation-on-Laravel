@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <div class="my-5">
                    <div class="text-center">
                        <h1>Olá, {{ Auth::user()->name }}!</h1>
                        <h5>Sua conta foi confirmada e agora vamos para os passos de configuração.</h5>
                    </div>
                    <div class="row justify-content-center my-4">
                        <div class="col-md-8">
                            <a href="{{route('painel.onboarding.step', 1)}}" class="btn btn-custom-step buttom_next py-3">Iniciar configuração</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
