@extends('layouts.dashboard')

@section('content')

    <div class=" mt-4">
        <div class="row">
            <div class="col-md-12">
                @include('partials.flash-messages')
                <div id='calendar' class="calendar-book"></div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-add-session" id="addnew_session" tabindex="-1" role="dialog" aria-labelledby="NewHourTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="NewHourTitle">Adicionar sessão</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('painel.agenda.new_session')}}">
                        @csrf

                        <div class="form-group">
                            <label for="customer_id" class="col-form-label text-md-right">Nome do cliente</label>
                            <select class="form-control" name="customer_id" >
                                @foreach($data['customers'] as $customer)
                                    <option value="{{$customer->id}}">{{$customer->name}}</option>
                                @endforeach
                            </select>
                            @error('customer_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="date" class="col-form-label text-md-right">Data</label>
                                    <div class="input-group date" id="datepicker">
                                        <input type='text' class="form-control" name="date" />
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button"><span class="fa fa-calendar"></span></button>
                                        </div>
                                    </div>
                                    @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="start_hour" class="col-form-label text-md-right">Horário</label>
                                    <div class="d-flex">
                                        <div class="input-group datetimepicker">
                                            <input type="text" class="form-control" name="start_hour" placeholder="00:00" >
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"><span class="fa fa-clock"></span></button>
                                            </div>
                                        </div>
                                        @error('start_hour')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="mx-2 pt-2">Até</div>
                                        <div class="input-group datetimepicker">
                                            <input type="text" class="form-control" name="end_hour" placeholder="00:00" >
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"><span class="fa fa-clock"></span></button>
                                            </div>
                                        </div>
                                        @error('end_hour')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="frequency_id" class="col-form-label text-md-right">Frequência de atendimento</label>
                            <select class="form-control" name="frequency_id">
                                @foreach($data['frequency'] as $frequency)
                                    <option value="{{$frequency->id}}">{{$frequency->name}}</option>
                                @endforeach
                            </select>
                            @error('frequency_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="charge_id" class="col-form-label text-md-right">Forma de Cobrança</label>
                                    <select class="form-control" name="charge_config_id">
                                        @foreach($data['attendanceConfiguration'] as $attendanceConfiguration)
                                            <option value="{{$attendanceConfiguration->frequency->id}}">{{(in_Array($attendanceConfiguration->frequency->quantity_days, ['1W', '2W']) ? 'Recorrente' : $attendanceConfiguration->frequency->name)}}</option>
                                        @endforeach
                                    </select>
                                    @error('charge_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="value" class="col-form-label text-md-right">Valor</label>
                                    <input name="value" type="text" placeholder="R$:" id="value-session" class="form-control">
                                    @error('value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <button type="submit" class="border-0 btn-submit btn btn-primary btn-block btn-blue">Adicionar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEvent_modal" tabindex="-1" role="dialog" aria-labelledby="modalEvent_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalEvent_title">Editar de horários</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="list-group">
                        <li class="list-group-item"><b>Cliente:</b> <span id="modalEvent_customer" style="float:right;"></span></li>
                        <li class="list-group-item"><b>Inicio:</b> <span id="modalEvent_start" style="float:right;"></span></li>
                        <li class="list-group-item"><b>Final:</b> <span id="modalEvent_end" style="float:right;"></span></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

@stop

@section('styles')
<link href='/dashboard/js/fullcalendar-5.10.1/lib/main.css' rel='stylesheet' />
<style>
    .fc-toolbar { text-transform: capitalize; }
</style>
@stop

@section('scripts')
<script src='/dashboard/js/fullcalendar-5.10.1/lib/main.js'></script>
<script src='/dashboard/js/fullcalendar-5.10.1/lib/locales/pt-br.js'></script>

<script>
    $(document).ready(function($) {
        $('#value-session').maskMoney({
            prefix: 'R$ ',
            allowNegative: true,
            thousands: '.',
            decimal: ',',
            affixesStay: false
        });
        $('#datepicker').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true,
            language: 'pt-BR',

        });
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
    });
    document.addEventListener('DOMContentLoaded', function() {

        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'pt-br',
            headerToolbar: {
                left: 'prev,title,next,custom1',
                center: '',
                right: ''
            },
            customButtons: {
                custom1: {
                    text: 'Adicionar Sessão',
                    click: function() {
                        $('#addnew_session').modal('show');
                    }
                },
            },
            events: "{{ route('painel.agenda.json') }}",
            eventClick: function(info) {
                var start = moment(info.event.start).locale('pt-br').format('D, MMMM, H:M');
                var end = moment(info.event.end).locale('pt-br').format('D, MMMM, H:M');

                $('#modalEvent_title').html('Consulta #'+info.event.id);
                $('#modalEvent_customer').html(info.event.title);
                $('#modalEvent_start').html(start);
                $('#modalEvent_end').html(end);
                $('#modalEvent_modal').modal();

                // info.el.style.borderColor = 'black';
            },
        });

        calendar.render();

        $('.fc-custom1-button ').prepend('<i class="fas fa-plus-circle mr-2"></i>' )



    });


</script>
@stop
