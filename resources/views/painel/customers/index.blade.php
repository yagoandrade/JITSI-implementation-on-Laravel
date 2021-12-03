@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="block-dashboard block-dashboard-section block-customers">
                <div class="d-flex">
                    <h5 class="title-block-customers">Todos os clientes</h5>
                    <a href="#" class="ml-auto btn btn-dashboard-section btn-blue" data-toggle="modal" data-target="#addCustomerModal">Adicionar novo Cliente</a>
                </div>
                <table class="table mt-3">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Cadastrado em</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($customers->count() > 0)
                        @foreach($customers as $customer)
                        <tr>
                            <th scope="row">{{$customer->name}} {{$customer->lastname}}</th>
                            <td>{{$customer->telephone}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->created_at->format('d//m/Y H:i:s')}}</td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <th colspan="12">Nenhum cliente encontrado.</th>
                        </tr>
                    @endif
                    </tbody>
                </table>

                <div class="row align-items-end justify-content-end">
                    <div class="col-md-2">
                        Quantidade por página
                        <select id="pagination">
                            <option value="8" @if($filter['rows'] == 8) selected @endif >8</option>
                            <option value="16" @if($filter['rows'] == 16) selected @endif >16</option>
                            <option value="24" @if($filter['rows'] == 24) selected @endif >24</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        {{ $customers->appends(request()->all())->render("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-add-session" id="addCustomerModal" tabindex="-1" role="dialog" aria-labelledby="modalEvent_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pl-5">
                    <h4 class="modal-title" id="modalEvent_title">Adicione novos clientes</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-5">
                    <form>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-check form-check-inline mr-5">
                                    <input class="form-check-input" type="radio" name="type_contact" id="typeContactEmail" value="email" checked>
                                    <label class="form-check-label" for="typeContactEmail">Email</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type_contact" id="typeContactWhats" value="whats">
                                    <label class="form-check-label" for="typeContactWhats">Whatsapp</label>
                                </div>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-12">
                                <input type="email" class="form-control input-invite-customer" id="inputEmail" placeholder="Digite o e-mail do cliente">
                                <input type="text" class="form-control input-invite-customer" style="display: none" id="inputWhats" placeholder="Digite o número do cliente">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 text-center">
                                <button type="submit" class="border-0 btn-submit btn btn-block" disabled>Enviar convite</button>
                                <a href="#" class="btn btn-link mt-2">Copiar link de convite</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('styles')
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            document.getElementById('pagination').onchange = function () {
                window.location = "{!! $customers->url(1) !!}&rows=" + this.value;
            };

            $('.form-check-input').click(function (){
                if($(this).val() === 'email'){
                    $('#inputWhats').hide()
                    $('#inputEmail').show()
                }else{
                    $('#inputEmail').hide()
                    $('#inputWhats').show()
                }
            })

            $('.input-invite-customer').on('blur', function () {
                console.log($(this).val())
            })
        });
    </script>
@stop
