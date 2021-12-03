@extends('layouts.panel')

@section('content')
    <div class="container step_page">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="my-5 py-5">
                    <div class="text-center my-3">
                        <div class="steps">
                            <div class="step activated rounded-circle">
                                1
                            </div>
                            <div class="progress_bar">
                                <div class="progress">
                                    <div class="progress-bar bg-custom progress-bar-animated" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="step rounded-circle border border-custom">
                                2
                            </div>
                            <div class="progress_bar">
                                <div class="progress">
                                    <div class="progress-bar bg-custom progress-bar-animated" role="progressbar" style="width: 0%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="step rounded-circle border border-custom">
                                3
                            </div>
                            <div class="progress_bar">
                                <div class="progress">
                                    <div class="progress-bar bg-custom progress-bar-animated" role="progressbar" style="width: 0%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="step rounded-circle border border-custom">
                                4
                            </div>
                            <div class="progress_bar">
                                <div class="progress">
                                    <div class="progress-bar bg-custom progress-bar-animated" role="progressbar" style="width: 0%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="step rounded-circle border border-custom">
                                5
                            </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h1>Primeiro vamos precisar de alguns dados complementares</h1>
                            <small>Essas informações estarão disponíveis em seu perfil na plataforma</small>
                        </div>

                        <form id="form" method="POST" action="{{ route('painel.onboarding.step_one.save') }}">
                            @csrf

                            <div class="row justify-content-center mt-5">
                                <div class="col-md-2 d-none d-sm-block"></div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ @$user->name }}" required autocomplete="name" autofocus
                                            placeholder="Nome">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input id="lastname" type="text"
                                            class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                            value="{{ @$user->lastname }}" required autocomplete="lastname" autofocus
                                            placeholder="Sobrenome">
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2 d-none d-sm-block"></div>
                                <div class="col-md-2 d-none d-sm-block"></div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror"
                                            name="cpf" value="{{ old('cpf', $user->cpf) }}" required autocomplete="cpf" autofocus
                                            placeholder="CPF">
                                        @error('cpf')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input id="crp" type="text" class="form-control @error('crp') is-invalid @enderror"
                                                name="crp" value="{{ old('crp', $user->crp) }}" required autocomplete="crp" autofocus
                                            placeholder="CRP">
                                        @error('crp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2 d-none d-sm-block"></div>
                                <div class="col-md-2 d-none d-sm-block"></div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input id="birthday" type="text" class="form-control datetimepicker @error('birthday') is-invalid @enderror"
                                               name="birthday" @if($user->birthday) value="{{ date('d/m/Y', strtotime($user->birthday)) }}" @endif required autocomplete="birthday" autofocus
                                               placeholder="Aniversário">
                                        @error('birthday')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input id="telephone" type="text"
                                            class="form-control @error('telephone') is-invalid @enderror" name="telephone"
                                            value="{{ old('telephone', $user->telephone) }}" required autocomplete="telephone" autofocus
                                            placeholder="Telefone">
                                        @error('telephone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2 d-none d-sm-block"></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <textarea placeholder="Mini Biografia" id="minibio" class="form-control  @error('minibio')
                                            is-invalid @enderror" rows="5" name="minibio">{{ old('minibio', $user->minibio) }}</textarea>
                                        @error('minibio')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <button type="submit" id="next" class="btn btn-custom-step py-3" disabled="disabled">Avançar</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    $("#cpf").mask("999.999.999-99");
    $("#telephone").mask("(99) 99999-9999");
    $("#birthday").mask("99/99/9999");

     function checkInputs(inputs) {
        var filled = true;

        inputs.forEach(function(input) {

            if(input.value === "") {
                filled = false;
            }

        });

        return filled;

    }
    var inputs = document.querySelectorAll("input");
    var button = document.querySelector("button");
    inputs.forEach(function(input) {
        input.addEventListener("keyup", function() {
            if(checkInputs(inputs)) {
                $("#next").prop( "disabled", false );
                $("#next").removeClass("btn-custom-step");
                $("#next").addClass("buttom_next");
            } else {
                $("#next").prop( "disabled", true );
                $("#next").removeClass("buttom_next");
                $("#next").addClass("btn-custom-step");
            }
        });
    });
</script>
<script>
    $(document).ready(function($) {
        $('.datetimepicker').datetimepicker({
            format: 'DD/MM/YYYY',
            locale: 'pt-br',
            defaultDate: false,
            icons: {
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                previous: "fa fa-arrow-left",
                next: "fa fa-arrow-right",
            },
        });
    });
</script>
@stop
