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
                                        role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="step rounded-circle activated">
                                5
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <h1>Vamos configurar a sua agenda?</h1>
                        <small>Defina os dias da semana e horários que você fornece atendimento</small>
                        @include('partials.flash-messages')
                    </div>
                    <div class="justify-content-center">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                @foreach($daysWeek as $dayWeek)
                                <a class="nav-item nav-link {{($dayWeek['id'] == 1) ? 'active' : ''}}" id="nav-home-tab" data-toggle="tab" href="#nav-{{$dayWeek['id']}}" role="tab" aria-controls="nav-{{$dayWeek['id']}}" aria-selected="{{($dayWeek['id'] == 1) ? 'true' : 'false'}}">{{explode('-', $dayWeek['name'])[0]}}</a>
                                @endforeach
                            </div>
                        </nav>
                        <div class="row">
                            <div class="tab-content" id="nav-tabContent">
                                @foreach($daysWeek as $dayWeek)
                                <div class="tab-pane fade show {{($dayWeek['id'] == 1) ? 'active' : ''}}" id="nav-{{$dayWeek['id']}}" role="tabpanel" aria-labelledby="nav-home-tab">
                                    @if(count($dayWeek['agenda']) > 0)
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Início</th>
                                            <th scope="col">Fim</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dayWeek['agenda'] as $agendaDay)
                                        <tr>
                                            <th>{{ date('H:i', strtotime($agendaDay['start_hour'])) }}</th>
                                            <td>{{ date('H:i', strtotime($agendaDay['end_hour'])) }}</td>
                                            <td>Ativo</td>
                                            <td>
                                                <a data-toggle="modal" data-target="#EditHour_{{$agendaDay['id']}}">
                                                    <img src="{{ asset('images/edit.png') }}" alt="">
                                                </a>
                                                <a href="{{route('painel.onboarding.agenda.remove_hour', $agendaDay['id'])}}">
                                                    <img src="{{ asset('images/delete.png') }}" alt="">
                                                </a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="EditHour_{{$agendaDay['id']}}" tabindex="-1" role="dialog" aria-labelledby="NewHourTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="NewHourTitle">Editar de horários</h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{route('painel.onboarding.agenda.save_hour', [$dayWeek['id'], $agendaDay['id']] )}}">
                                                            @csrf

                                                            <div class="row content_modal_hour">
                                                                <div class="col-md-2"></div>
                                                                <div class="col-md-4 justify-content-center">
                                                                    Horário de início: <br>
                                                                    <div class="input-group mb-3 datetimepicker">
                                                                        <input type="text" class="form-control" name="start_hour" placeholder="00:00" value="{{ date('H:i', strtotime($agendaDay['start_hour'])) }}">
                                                                        <div class="input-group-append">
                                                                            <button class="btn btn-outline-secondary" type="button"><span class="fa fa-clock"></span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 justify-content-center">
                                                                    Horário de final: <br>
                                                                    <div class="input-group mb-3 datetimepicker">
                                                                        <input type="text" class="form-control" name="end_hour" placeholder="00:00" value="{{ date('H:i', strtotime($agendaDay['end_hour'])) }}">
                                                                        <div class="input-group-append">
                                                                            <button class="btn btn-outline-secondary" type="button"><span class="fa fa-clock"></span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2"></div>
                                                            </div>
                                                            <div class="row justify-content-center mt-4">
                                                                <button type="submit" class="btn btn-custom-modal px-4">Editar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                    <div class="row justify-content-center my-3">
                                        <div class="col-md-8 col-sm-12 text-center content_schedule">
                                            <p>
                                                Você ainda não tem horários cadastrados para {{$dayWeek['name']}}, clique no botão abaixo e adicione uma faixa de horário.
                                            </p>
                                        </div>
                                    </div>
                                    @endif

                                    <div class="row justify-content-center">
                                        <a class="btn-schedule px-5 py-3" data-toggle="modal" data-target="#NewHour_{{$dayWeek['id']}}">
                                            Novo Horário
                                        </a>
                                    </div>

                                    <div class="modal fade" id="NewHour_{{$dayWeek['id']}}" tabindex="-1" role="dialog" aria-labelledby="NewHourTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="NewHourTitle">Cadastro de horários</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{route('painel.onboarding.agenda.save_hour', $dayWeek['id'])}}">
                                                        @csrf

                                                        <div class="row content_modal_hour">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-4 justify-content-center">
                                                                Horário de início: <br>
                                                                <div class="input-group mb-3 datetimepicker">
                                                                    <input type="text" class="form-control timedate" name="start_hour" placeholder="00:00">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-outline-secondary" type="button"><span class="fa fa-clock"></span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 justify-content-center">
                                                                Horário de final: <br>
                                                                <div class="input-group mb-3 datetimepicker">
                                                                    <input type="text" class="form-control timedate" name="end_hour" placeholder="00:00">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-outline-secondary" type="button"><span class="fa fa-clock"></span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>
                                                        <div class="row justify-content-center mt-4">
                                                            <button type="submit" class="btn btn-custom-modal px-4">Cadastrar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('painel.onboarding.step_five.save') }}">
                        @csrf
                        <div class="row justify-content-center mt-4">
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

@section("scripts")
    <script>
        $(document).ready(function($) {
            $(".timedate").mask("99:99");

            $('.datetimepicker').datetimepicker({
                format: 'LT',
                locale: 'pt-br',
                stepping: 5,
                icons: {
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down",
                },
                sideBySide: true,
            });

            var hours = {!! $countDays !!};
            console.log(hours);
            if(hours > 0){
                $("#next").prop( "disabled", false );
                $("#next").removeClass("btn-custom-step");
                $("#next").addClass("buttom_next");
            }else{
                $("#next").prop( "disabled", true );
                $("#next").removeClass("buttom_next");
                $("#next").addClass("btn-custom-step");
            }
        });
    </script>
@endsection
