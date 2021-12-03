@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-4">
            @include('partials.flash-messages')
            <div class="block-dashboard block-dashboard-calendar p-0">
                <div class="p-3">
                    <div id='calendar'></div>
                </div>
                <div class="px-4 mb-3">
                    <h5 class="mt-0">Proximas sessões</h5>
                    <div id="sessionsList_loading" class="loadingSessions">
                        <i class="fa fa-spin fa-spinner"></i> Carregando...
                    </div>
                </div>
                <table class="table" id="sessionsList">
                    <thead>
                        <tr>
                            <th scope="col">Cliente</th>
                            <th scope="col">Data</th>
                            <th scope="col">Hora</th>
                        </tr>
                    </thead>
                    <tbody id="sessionsList_table">
                        @if($data['sessions']['today']->count() > 0)
                            @foreach($data['sessions']['today'] as $sessionToday)
                            <tr>
                                <td><img class="img-profile-calendar rounded-circle ml-auto" src="{{$sessionToday->customer->getImage()}}">{{$sessionToday->customer->name.' '.$sessionToday->customer->lastname}}</td>
                                <td class="pt-4">{{$sessionToday->date->format('d/m')}}</td>
                                <td class="pt-4">{{$sessionToday->start_time->format('H:i')}}</td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="12" class="text-center">Nenhuma sessão agendada para hoje.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="p-4 pt-0">
                    <a data-toggle="modal" data-target="#addnew_session" class="ml-auto btn-dashboard-calendar-add d-flex justify-content-end"><i class="fas fa-plus-circle"></i> Adicionar sessão</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-5">
                    <div class="block-dashboard block-dashboard-account">
                        <div class="d-flex">
                            <h5>Conta digital</h5>
                            <a href="#" class="ml-auto btn-dashboard-account-more">Ver detalhes</a>
                        </div>
                        <span>Psibank</span>
                        <div class="d-flex mt-3">
                            <div class="label-dashboard-account">Saldo disponível:</div>
                            <div class="ml-auto value-dashboard-account-1">R$ {{number_format($data['financial']['balance'], 2)}}</div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="label-dashboard-account">Próximo mês:</div>
                            <div class="ml-auto value-dashboard-account-2">R$ {{number_format($data['financial']['next_month'], 2)}}</div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <a href="#" class="btn btn-dashboaard-account-1">Adiantar valor</a>
                            <a href="#" class="btn btn-dashboaard-account-2 ml-auto">Realizar saque</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-dashboard block-dashboard-customers">
                                <div class="d-flex">
                                    <h5>Clientes</h5>
                                    <a href="#" class="ml-auto btn-dashboard-customers-add"><i class="fas fa-plus-circle"></i> Adicionar cliente</a>
                                </div>
                                <div class="d-flex mt-1">
                                    <div class="number-customers">{{$data['customers']['total']}}</div>
                                    <div class="ml-auto">
                                        @foreach($data['customers']['images'] as $customerImages)
                                        <img class="img-profile-customers rounded-circle ml-auto" src="{{$customerImages->getImage()}}">
                                        @endforeach
                                        <div class="img-profile-customers-more rounded-circle ml-auto">+{{$data['customers']['images_count']}}</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-dashboard d-flex block-dashboard-donation">
                                <div class="rounded-circle bg-white justify-content-center block-heart-donation mr-3">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="text-dashboard-donation justify-content-center">Que tal doar um atendimento?</div>
                                <a href="#" class="btn btn-dashboard-donation ml-auto">Fazer doação</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="block-dashboard block-dashboard-section">
                        <div class="d-flex">
                            <h5>Sessões por mês</h5>
                            <a href="{{route('painel.agenda')}}" class="ml-auto btn btn-dashboard-section">Ver sessões</a>
                        </div>

                        <div class="chart-area pt-4">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addnew_session" tabindex="-1" role="dialog" aria-labelledby="NewHourTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="NewHourTitle">Editar de horários</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('painel.agenda.new_session')}}">
                        @csrf

                        <div class="form-group">
                            <label for="customer_id" class="col-form-label text-md-right">Cliente</label>
                            <select class="form-control" name="customer_id">
                                @foreach($data['new_session']['customers'] as $customer)
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
                                    <input type="date" class="form-control" name="date">
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
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="time" class="form-control" name="start_hour">
                                            @error('start_hour')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-">
                                            <p>Até</p>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="time" class="form-control" name="end_hour">
                                            @error('end_hour')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="frequency_id" class="col-form-label text-md-right">Frequência de atendimento</label>
                            <select class="form-control" name="frequency_id">
                                @foreach($data['new_session']['frequency'] as $frequency)
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
                                        @foreach($data['new_session']['attendanceConfiguration'] as $attendanceConfiguration)
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
                                    <input type="text" name="value" class="form-control">
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

@stop

@section('styles')
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.css' rel='stylesheet' />
    <link href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css' rel='stylesheet'>
    <link href='/dashboard/js/fullcalendar-5.10.1/lib/main.css' rel='stylesheet' />
    <style>
        .fc-toolbar { text-transform: capitalize; }
        .fc-daygrid-day-events {display:none;}
        .loadingSessions{
            display: none;
            background: #90afc8;
            border-radius: 6px;
            padding: 20px;
            text-align: center;
            color: #fff;
            margin-bottom: 25px;
            margin-top: 25px;
        }
        .eventon_fullcal .eventon_fc_days .evo_fc_day.on_focus:hover, .eventon_fc_days .evo_fc_day.has_events:hover { background: red !important; color: white !important; }
    </style>
@stop

@section('scripts')
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src='/dashboard/js/fullcalendar-5.10.1/lib/main.js'></script>
    <script src='/dashboard/js/fullcalendar-5.10.1/lib/locales/pt-br.js'></script>
    <script src="https://momentjs.com/downloads/moment.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'pt-br',
                headerToolbar: {
                    center: 'title',
                    left: 'prev',
                    right: 'next'
                },
                height: 350,
                showNonCurrentDates: false,
                selectable: true,
                eventLimit: true,
                editable: true,
                events: "{{ route('painel.agenda.json_home') }}",
                dateClick: function(info) {
                    $('#sessionsList_loading').show();
                    $('#sessionsList').hide();
                    $.get("{{ route('painel.agenda.json_home') }}?date="+info.dateStr, function(data){
                        tableData = '';

                        if(data.length > 0) {
                            $.each(data, function (index) {
                                tableData += '<tr>';
                                tableData += '<td><img class="img-profile-calendar rounded-circle ml-auto" src="' + data[index].list.img + '">' + data[index].list.name + '</td>';
                                tableData += '<td class="pt-4">' + data[index].list.date + '</td>';
                                tableData += '<td class="pt-4">' + data[index].list.time + '</td>';
                                tableData += '</tr>';
                            });
                        }else{
                            tableData += '<tr>';
                            tableData += '<td colspan="12" class="text-center">Nenhuma sessão agendada para a data selecionada.</td>';
                            tableData += '</tr>';
                        }

                        setTimeout(function(){
                            $('#sessionsList_table').html(tableData);
                            $('#sessionsList_loading').hide();
                            $('#sessionsList').show();
                        }, 700);

                    });
                }
            });

            calendar.render();

            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';

            function number_format(number, decimals, dec_point, thousands_sep) {
                // *     example: number_format(1234.56, 2, ',', ' ');
                // *     return: '1 234,56'
                number = (number + '').replace(',', '').replace(' ', '');
                var n = !isFinite(+number) ? 0 : +number,
                    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                    s = '',
                    toFixedFix = function(n, prec) {
                        var k = Math.pow(10, prec);
                        return '' + Math.round(n * k) / k;
                    };
                // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
                if (s[0].length > 3) {
                    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                }
                if ((s[1] || '').length < prec) {
                    s[1] = s[1] || '';
                    s[1] += new Array(prec - s[1].length + 1).join('0');
                }
                return s.join(dec);
            }

// Area Chart Example
            var ctx = document.getElementById("myAreaChart");
            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php echo sprintf("'%s'", implode("', '", $chart['day'])) ?>],
                    datasets: [{
                        label: "Sessões",
                        lineTension: 0.3,
                        backgroundColor: "rgba(78, 115, 223, 0.05)",
                        borderColor: "rgba(149, 188, 164, 1)",
                        pointRadius: 3,
                        pointBackgroundColor: "rgba(255, 255, 255, 1)",
                        pointBorderColor: "rgba(149, 188, 164, 1)",
                        pointHoverRadius: 3,
                        pointHoverBackgroundColor: "rgba(149, 188, 164, 1)",
                        pointHoverBorderColor: "rgba(149, 188, 164, 1)",
                        pointHitRadius: 10,
                        data: [{{implode(', ', $chart['total'])}}],
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            left: 10,
                            right: 25,
                            top: 25,
                            bottom: 0
                        }
                    },
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'date'
                            },
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                maxTicksLimit: 12
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                maxTicksLimit: 5,
                                padding: 10,
                                // Include a dollar sign in the ticks
                                callback: function(value, index, values) {
                                    return number_format(value);
                                }
                            },
                            gridLines: {
                                color: "rgb(234, 236, 244)",
                                zeroLineColor: "rgb(234, 236, 244)",
                                drawBorder: false,
                                borderDash: [2],
                                zeroLineBorderDash: [2]
                            }
                        }],
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        titleMarginBottom: 10,
                        titleFontColor: '#6e707e',
                        titleFontSize: 14,
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        intersect: false,
                        mode: 'index',
                        caretPadding: 10,
                        callbacks: {
                            label: function(tooltipItem, chart) {
                                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                            }
                        }
                    }
                }
            });



        });
    </script>

@stop
