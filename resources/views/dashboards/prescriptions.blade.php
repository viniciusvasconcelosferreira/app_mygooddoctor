@extends('layouts.front')
@section('content')
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 mt-2">
                <a href="{{route('dashboards.prescription.create')}}">
                    <div class="card bg-gradient-info">
                        <div class="card-body p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-success shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10" aria-hidden="true">add</i>
                            </div>
                            <div class="text-end pt-1">
                                <h3 class="mb-0">Preescrever nova receita</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Receitas cadastradas</h5>
                    <p class="text-sm mb-0">
                        Veja aqui o histórico das suas preescrições médicas
                    </p>
                </div>
                <div class="table-responsive">
                    <table class="table table-flush" id="datatable-search">
                        <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Data</th>
                            <th>Paciente</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($prescriptions as $prescription)
                            <tr>
                                <td>
                                    <p class="text-xs font-weight-normal ms-2 mb-0">{{$prescription->id}}</p>
                                </td>
                                <td class="font-weight-normal">
                                    <span
                                        class="my-2 text-xs">{{\Carbon\Carbon::parse($prescription->date)->format('d/m/Y')}}</span>
                                </td>
                                <td class="text-xs font-weight-normal">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('img/doctors/team-2.jpg')}}" class="avatar avatar-xs me-2"
                                             alt="user image">
                                        <span>

                                            @if($prescription->patient->user)
                                                {{$prescription->patient->user->name}}
                                            @else
                                                {{\Faker\Provider\pt_BR\Person::firstNameMale()}}
                                                {{\Faker\Provider\pt_BR\Person::lastName()}}
                                                {{\Faker\Provider\pt_BR\Person::lastName()}}
                                            @endif</span>
                                    </div>
                                </td>
                                <td class="text-sm">
                                    <a href="{{route('dashboards.prescription.receipt',$prescription->id)}}" data-bs-toggle="tooltip"
                                       data-bs-original-title="Visualizar receita">
                                        <i class="material-icons text-secondary position-relative text-lg">visibility</i>
                                    </a>
                                    <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                       data-bs-original-title="Editar receita">
                                        <i class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                    </a>
                                    <a href="javascript:;" data-bs-toggle="tooltip"
                                       data-bs-original-title="Excluir receita">
                                        <i class="material-icons text-secondary position-relative text-lg">delete</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
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
