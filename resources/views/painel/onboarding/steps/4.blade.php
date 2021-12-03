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
                                    <div class="progress-bar bg-custom progress-bar-animated"
                                        role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="step activated rounded-circle">
                                2
                            </div>
                            <div class="progress_bar">
                                <div class="progress">
                                    <div class="progress-bar bg-custom progress-bar-animated"
                                        role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="step rounded-circle activated">
                                3
                            </div>
                            <div class="progress_bar">
                                <div class="progress">
                                    <div class="progress-bar bg-custom progress-bar-animated"
                                        role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="step activated rounded-circle">
                                4
                            </div>
                            <div class="progress_bar">
                                <div class="progress">
                                    <div class="progress-bar bg-custom progress-bar-animated"
                                        role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="step rounded-circle border border-custom">
                                5
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <h1>Agora iremos configurar o seus modelos de cobrança</h1>
                        <small>Escolha os tipos planos oferecidos aos seus clientes</small>
                    </div>

                    <form method="POST" action="{{ route('painel.onboarding.step_four.save') }}">
                        @csrf
                        <div class="card px-2 py-3">
                            <div class="accordion">
                                <span>Cobrança recorrente</span>
                                <label class="switch button_step_4">
                                    <input data-toggle="collapse" data-target="#recurrent" type="checkbox" class="{{($inputs['1W']['active'] || $inputs['2W']['active']) ? 'collapsed' : ''}}">
                                    <span class="slider round {{($inputs['1W']['active'] || $inputs['2W']['active']) ? 'active' : ''}}"></span>
                                </label>
                            </div>
                            <div id="recurrent" class="collapse {{($inputs['1W']['active'] || $inputs['2W']['active']) ? 'show' : ''}}">
                                <p>Você poderá configurar a contratação de planos para <strong> cobrança mensal</strong>
                                    de forma <br> automatizada, assim facilitará a gestão dos recebimentos.</p>
                                <input type="checkbox" name="for_week_package" id="for_week_package"
                                    onchange="habilitarWeek()" {{($inputs['1W']['active']) ? 'checked' : ''}}/> Pacote de atendimento semanal
                                <span class="ml-3 mb-1">
                                    <input name="1W" id="week_package" type="text" placeholder="R$:" disabled value="{{$inputs['1W']['active']}}" />
                                </span>
                                <div class="mt-3">
                                    <input type="checkbox" name="for_biweekly_package" id="for_biweekly_package"
                                        onchange="habilitarBiweekly()" {{($inputs['2W']['active']) ? 'checked' : ''}}/> Pacote de atendimento quinzenal
                                    <span class="ml-2">
                                        <input name="2W" id="biweekly_package" type="text" placeholder="R$:" disabled value="{{$inputs['2W']['value']}}" />
                                    </span>
                                </div>
                            </div>

                            <div class="accordion">
                                    <span>Cobrança avulsa</span>
                                    <label class="switch button_step_4">
                                        <input data-toggle="collapse" data-target="#single" type="checkbox" class="{{($inputs['AV']['active']) ? 'collapsed' : ''}}">
                                        <span class="slider round {{($inputs['AV']['active']) ? 'active' : ''}}"></span>
                                    </label>
                                <div id="single" class="collapse {{($inputs['AV']['active']) ? 'show' : ''}}">
                                    <input name="AV" id="single_value" type="text" placeholder="R$:" value="{{$inputs['AV']['value']}}" />
                                </div>
                            </div>
                            <div class="accordion">
                                <span>Cobrança por pacote</span>
                                <label class="switch button_step_4">
                                    <input data-toggle="collapse" data-target="#package" type="checkbox" class="{{($inputs['PK']['active']) ? 'collapsed' : ''}}">
                                    <span class="slider round {{($inputs['PK']['active']) ? 'active' : ''}}"></span>
                                </label>
                                <div id="package" class="collapse {{($inputs['PK']['active']) ? 'show' : ''}}">
                                    <input name="PK" id="package_value" type="text" placeholder="R$:" value="{{$inputs['PK']['value']}}" />
                                </div>
                            </div>
                            <div id="package" class="collapse">
                            </div>

                            <div class="accordion">
                                <span>Doar atendimentos</span>
                                <label class="switch button_step_4">
                                    <input data-toggle="collapse" data-target="#donate" type="checkbox" class="{{($inputs['DO']['active']) ? 'collapsed' : ''}}">
                                    <span class="slider round {{($inputs['DO']['active']) ? 'active' : ''}}"></span>
                                </label>
                                <div id="donate" class="collapse {{($inputs['DO']['active']) ? 'show' : ''}}">
                                    <small>Escolha quantos atendimentos gostaria de doar para nosso programa de Psicoterapia online voluntária.</small>
                                    <br>
                                    <p>Quantos atendimentos você gostaria de doar?
                                        <input name="DO" id="donate_value" type="number" placeholder="" value="{{$inputs['DO']['value']}}"/>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <div class="col-md-8">
                                <button type="submit" id="next" class="btn btn-custom-step py-3" disabled="disabled">Avançar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function habilitarWeek() {
            if (document.getElementById('for_week_package').checked) {
                document.getElementById('week_package').removeAttribute("disabled");
            } else {
                document.getElementById('week_package').setAttribute("disabled", "disabled");
            }
        }
        function habilitarBiweekly() {
            if (document.getElementById('for_biweekly_package').checked) {
                document.getElementById('biweekly_package').removeAttribute("disabled");
            } else {
                document.getElementById('biweekly_package').setAttribute("disabled", "disabled");
            }
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

    <script>

        $(document).ready(function($) {
            $('#week_package, #biweekly_package, #single_value, #package_value').maskMoney({
                prefix: 'R$ ',
                allowNegative: true,
                thousands: '.',
                decimal: ',',
                affixesStay: false
            });
            $('#week_package, #biweekly_package, #single_value, #package_value, #donate_value').change(function() {
                if(($("#week_package").val() !== "") || ($("#biweekly_package").val() !== "") || ($("#single_value").val() !== "") || ($("#package_value").val() !== "") || ($("#package_value").val() !== "") || ($("#donate_value").val() !== "")) {
                        $("#next").prop( "disabled", false );
                        $("#next").removeClass("btn-custom-step");
                        $("#next").addClass("buttom_next");
                    }else{
                        $("#next").prop( "disabled", true );
                        $("#next").removeClass("buttom_next");
                        $("#next").addClass("btn-custom-step");
                    }
            });
        });
    </script>
@endsection
