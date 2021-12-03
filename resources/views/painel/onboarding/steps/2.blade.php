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
                                        role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="step rounded-circle border border-custom">
                                3
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
                    <div class="text-center">
                        <h1>Agora escolha uma foto para o seu perfil</h1>
                        <small>A foto ficará visível em seu perfil na plataforma</small>
                    </div>

                    <form method="POST" action="{{route('painel.onboarding.step_two.save')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row justify-content-center">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group justify-content-center">
                                    <input id="image" type="file" id="image" class="hidden form-control @error('image') is-invalid @enderror" name="image">
                                    <label for="image">
                                        @if($user->image)
                                            <img id="preview-image" class="img-fluid preview"
                                                 src="{{$user->getImage()}}"
                                                 alt="preview image" style="cursor: pointer">
                                        @else
                                            <img id="preview-image" class="img-fluid preview"
                                                 src="{{ asset('images/image_submit.png') }}"
                                                 alt="preview image" style="cursor: pointer">
                                        @endif
                                    </label>
                                    @error('image')
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
@endsection

@section('scripts')
<script>
    $(document).ready(function(e) {

        $('#image').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
            if($("#image").val() !== ''){
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
