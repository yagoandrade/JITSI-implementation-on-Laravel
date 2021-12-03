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
                    <div class="row justify-content-center my-5">
                        <div class="loader_setting"></div>
                        <br>
                    </div>
                    <div class="mt-3 row justify-content-center ">
                        <h1>Estamos construindo o seu consultório online</h1>
                        <p>Obrigado por escolher fazer parte do nosso time</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        setTimeout(function () {
            location.href = "{{$urlNew}}";
        }, 5000);
    </script>
@stop
