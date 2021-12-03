@extends('layouts.dashboard')

@section('content')

    @if($resources->count() > 0)
    <div class="painel">
        <div class="row">
            <div class="col-12">
                <h3 class="title my-4">Adicione recursos ao seu consultório com apenas 1 clique</h3>
            </div>
        </div>
        <div class="row">
            @foreach($resources as $resource)
            <div class="col-md-6">
                <div class="card card-resource mb-4">
                    <div class="card-body">
                        <div class="d-flex">
                            <h4 class="title-card"><i class="fas fa-video mr-2"></i> {{$resource->name}}</h4>
                            <label class="switch mt-1 ml-auto">
                                <input type="checkbox" class="checkbox-resource" value="{{$resource->id}}" {{($user->resource()->where('resource_id', $resource->id)->first()) ? 'checked' : ''}}>
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <p class="text-card my-3">{{$resource->description}}</p>
                        <div class="d-flex">
                            <span class="price-resource">R$ 16,90/mês</span>
                            <a href="#" class="ml-auto link-more-resource">Saiba mais <i class="ml-2 fas fa-arrow-right"></i></a>
                        </div>
{{--                        <form method="POST" action="{{route('painel.resources.save')}}">--}}
{{--                            @csrf--}}
{{--                            <input type="text" name="id" value="{{$resource->id}}">--}}
{{--                            <button type="submit">Save</button>--}}
{{--                        </form>--}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            $('.checkbox-resource').click(function (){
                $.ajax({
                    url : "{{ route('painel.resources.save') }}",
                    type : 'post',
                    data : {
                        "_token": "{{ csrf_token() }}",
                        id : $(this).val()
                    },
                    beforeSend : function(){
                        // $("#resultado").html("ENVIANDO...");
                    }
                })
                .done(function(msg){
                    // alert(msg)
                })
                .fail(function(jqXHR, textStatus, msg){
                    // alert(msg);
                });
            })
        })
    </script>

@stop
