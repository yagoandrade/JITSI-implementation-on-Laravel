@extends('layouts.panel')

@section('content')
    <div class="container step_page">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="my-5 py-5">
                    <form method="POST" action="{{route('painel.onboarding.step_tree.save')}}">
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
                            <div class="step activated rounded-circle">
                                3
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
                                4
                            </div>
                            <div class="progress_bar">
                                <div class="progress">
                                    <div class="progress-bar bg-custom progress-bar-animated"
                                        role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="step rounded-circle border border-custom">
                                5
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <h1>Conta pra gente quais as suas especialidades</h1>
                        <small>Isso ajudará os pacientes a encontrar o seu perfil</small>
                        @include('partials.flash-messages')
                    </div>

                    <form method="POST" action="{{ route('painel.onboarding.step_tree.save') }}">
                        @csrf
                        @foreach($questions as $question)
                        <h4>{{$question['question']['name']}}</h4>
                        <div class="row justify-content-center my-4 ks-cboxtags">
                            @foreach($question['replies'] as $reply)
                            <div class="col-md-3 col-sm-12">
                                <div>
                                    <input type="checkbox" id="input_{{$reply['id']}}" name="specialty[{{$question['question']['id']}}][]" value="{{$reply['id']}}" {{($question['replies_selected'][$reply['id']]['is_checked']) ? 'checked' : ''}}>
                                    <label for="input_{{$reply['id']}}">{{$reply['name']}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <button type="submit" class="btn buttom_next py-3">Avançar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('styles')
<style>
    div .ks-cboxtags {
        list-style: none;
    }
    div .ks-cboxtags div{
        display: inline;
    }
    div .ks-cboxtags div label{
        display: inline-block;
        background-color: rgba(255, 255, 255, .9);
        border: 2px solid rgba(139, 139, 139, .3);
        color: #95BCA4;
        border-radius: 5px;
        white-space: nowrap;
        width:100%;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
        transition: all .2s;
        text-align: center;
    }

    div .ks-cboxtags div label {
        padding: 8px 12px;
        cursor: pointer;
    }

    div .ks-cboxtags div input[type="checkbox"]:checked + label {
        border: 2px solid #95BCA4;
        background-color: #95BCA4;
        color: #fff;
        transition: all .2s;
    }

    div .ks-cboxtags div input[type="checkbox"] {
        display: absolute;
    }
    div .ks-cboxtags div input[type="checkbox"] {
        position: absolute;
        opacity: 0;
    }
    div .ks-cboxtags div input[type="checkbox"]:focus + label {
        border: 2px solid #95BCA4;
    }
</style>
@stop

@section('scripts')
    <script src="{{ asset('js/step-3.js') }}"></script>
@endsection
