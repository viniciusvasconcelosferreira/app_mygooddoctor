@extends('layouts.front-profile')
@section('content')
    <div class="page-header min-height-300 border-radius-xl mt-4"
         style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    @php $files = new FilesystemIterator('img/doctors'); @endphp
                    @foreach($files as $file)
                        @php $entries[]= str_replace("\\",'/',$file); @endphp
                    @endforeach
                    @php $img = array_rand($entries,1); @endphp
                    <img src="{{asset($entries[$img])}}" alt="profile_image"
                         class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        {{auth()->user()->name}}
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                        {{auth()->user()->profile['department']}}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Informação do Perfil</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="javascript:;">
                                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                           data-bs-placement="top" title="Editar Perfil"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <p class="text-sm">
                                {{auth()->user()->profile['description']}}
                            </p>
                            <hr class="horizontal dark my-4">
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">CRM:</strong> &nbsp; {{auth()->user()->profile['crm']}}
                                </li>
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nome
                                        Completo:</strong> &nbsp; {{auth()->user()->name}}
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Telefone:</strong> &nbsp; {{auth()->user()->profile['phone']}}
                                </li>
                                @if(auth()->user()->profile['mobile_phone'])
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Telefone Celular:</strong>
                                        &nbsp; {{auth()->user()->profile['mobile_phone']}}
                                    </li>
                                @endif
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Email:</strong> &nbsp; {{auth()->user()->email}}
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Endereço:</strong>
                                    &nbsp; {{auth()->user()->profile['address']}}
                                </li>
                                <li class="list-group-item border-0 ps-0 pb-0">
                                    <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                    <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0"
                                       href="https://www.facebook.com/{{unserialize(auth()->user()->profile['social'])[0]}}"
                                       target="_blank">
                                        <i class="fab fa-facebook fa-lg"></i>
                                    </a>
                                    <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0"
                                       href="https://twitter.com/{{unserialize(auth()->user()->profile['social'])[1]}}"
                                       target="_blank">
                                        <i class="fab fa-twitter fa-lg"></i>
                                    </a>
                                    <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0"
                                       href="https://www.instagram.com/{{unserialize(auth()->user()->profile['social'])[2]}}"
                                       target="_blank">
                                        <i class="fab fa-instagram fa-lg"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="mb-5 ps-3">
                        <h6 class="mb-1">Pacientes</h6>
                        <p class="text-sm">Pacientes aos seus cuidados</p>
                    </div>
                    <div class="row">
                        @foreach($patients as $patient)
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="card-header p-0 mt-n4 mx-3">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            @php $files = new FilesystemIterator('img/patients'); @endphp
                                            @foreach($files as $file)
                                                @php $entries_profile[]= str_replace("\\",'/',$file); @endphp
                                            @endforeach
                                            @php $img = array_rand($entries_profile,1); @endphp
                                            <img src="{{asset($entries_profile[$img])}}" alt="img-blur-shadow"
                                                 class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                    <div class="card-body p-3">
                                        <p class="mb-0 text-sm">{{$patient->cpf}}</p>
                                        <a href="#">
                                            <h5>
                                                {{\Faker\Provider\pt_BR\Person::firstNameMale()}} {{\Faker\Provider\pt_BR\Person::lastName()}} {{\Faker\Provider\pt_BR\Person::lastName()}}
                                            </h5>
                                        </a>
                                        <p class="mb-4 text-sm">
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                                    class="text-dark">Endereço:</strong>
                                                &nbsp; {{$patient->address}}
                                            </li>
                                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                                    class="text-dark">Telefone:</strong>
                                                &nbsp; {{$patient->phone}}
                                            </li>
                                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                                    class="text-dark">Celular:</strong>
                                                &nbsp; {{$patient->mobile_phone}}
                                            </li>
                                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                                    class="text-dark">Tipo Sanguineo:</strong>
                                                &nbsp; @if($patient->blood_type)
                                                    {{$patient->blood_type}}
                                                @else
                                                    {{\Faker\Provider\Medical::bloodType()}}{{\Faker\Provider\Medical::bloodRh()}}
                                                @endif
                                            </li>
                                        </ul>
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">Ver
                                                Paciente
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
