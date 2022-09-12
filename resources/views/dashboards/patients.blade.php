@extends('layouts.front')
@section('content')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Últimos pacientes cadastrados</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="datatable-search">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nome
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Aguardando Retorno
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Aguardando Exame
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Email
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Data do Cadastro
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    ID
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($patients as $patient)
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img
                                                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/blue-shoe.jpg"
                                                    class="avatar me-3" alt="image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">@if($patient->user)
                                                        {{$patient->user->name}}
                                                    @else
                                                        {{\Faker\Provider\pt_BR\Person::firstNameMale()}} {{\Faker\Provider\pt_BR\Person::lastName()}} {{\Faker\Provider\pt_BR\Person::lastName()}}
                                                    @endif</h6>
                                                <p class="text-sm font-weight-normal text-secondary mb-0">
                                                    <span class="text-success">{{$patient->cpf}}</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-xs font-weight-normal">
                                        @if(random_int(0,1) == 0)
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                                                    <i class="material-icons text-sm" aria-hidden="true">done</i>
                                                </button>
                                            </div>
                                        @else
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                                                    <i class="material-icons text-sm" aria-hidden="true">clear</i>
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-xs font-weight-normal">
                                        @if(random_int(0,1) == 0)
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                                                    <i class="material-icons text-sm" aria-hidden="true">done</i>
                                                </button>
                                            </div>
                                        @else
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                                                    <i class="material-icons text-sm" aria-hidden="true">clear</i>
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-normal mb-0">
                                            @if($patient->user)
                                                {{$patient->user->email}}
                                            @else
                                                {{\Faker\Provider\Internet::safeEmailDomain().'@'}}{{\Faker\Provider\Internet::freeEmailDomain()}}
                                            @endif
                                        </p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <p class="text-sm font-weight-normal mb-0">{{\Illuminate\Support\Facades\Date::parse($patient->created_at)->format('d/m/Y')}}</p>
                                        </div>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <p class="text-sm font-weight-normal mb-0">{{$patient->id}}</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 mt-2">
                <a href="#">
                    <div class="card bg-gradient-primary">
                        <div class="card-body p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-success shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10" aria-hidden="true">add</i>
                            </div>
                            <div class="text-end pt-1">
                                {{--                            <p class="text-sm mb-0 text-capitalize">Today's Trip</p>--}}
                                <h3 class="mb-0">Inserir novo paciente</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-12 col-12 mt-4 mt-lg-2">
                <a href="#">
                    <div class="card bg-gradient-warning">
                        <div class="card-body p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10" aria-hidden="true">search</i>
                            </div>
                            <div class="text-end pt-1">
                                {{--                            <p class="text-sm mb-0 text-capitalize">Battery Health</p>--}}
                                <h3 class="mb-0">Buscar paciente</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json"></script>
    <script>
        const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
            searchable: true,
            fixedHeight: true,
            labels: {
                placeholder: "Procurar...",
                perPage: "{select} entradas por página",
                noRows: "Nenhuma entrada encontrada",
                info: "Mostrando {start} a {end} de {rows} entradas",
            },
            perPage: 5
        });
    </script>
@endsection
