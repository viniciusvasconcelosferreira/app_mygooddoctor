@extends('layouts.front-profile')
@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css"
          integrity="sha512-MQXduO8IQnJVq1qmySpN87QQkiR1bZHtorbJBD0tzy7/0U9+YIC93QWHeGTEoojMVHWWNkoCp8V6OzVSYrX0oQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="row mb-5">
        <div class="col-lg-12 mt-lg-0 mt-4">
            <!-- Card Profile -->
            <div class="card card-body" id="profile">
                <div class="row justify-content-center align-items-center">
                    <div class="col-sm-auto col-4">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{asset('img/doctors/bruce-mars.jpg')}}" alt="{{auth()->user()->name}}"
                                 class="w-100 rounded-circle shadow-sm">
                        </div>
                    </div>
                    <div class="col-sm-auto col-8 my-auto">
                        <div class="h-100">
                            <h5 class="mb-1 font-weight-bolder">
                                {{auth()->user()->name}}
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                {{auth()->user()->profile['department']}}
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                        <div class="form-check form-switch ms-2 my-auto">
                            <strong>{{auth()->user()->profile['crm']}}</strong>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card Basic Info -->
            <div class="card mt-4" id="basic-info">
                <div class="card-header">
                    <h5>Informações básicas</h5>
                </div>
                <div class="card-body pt-0">
                    <form action="" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group input-group-static">
                                    <label>Nome</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           id="name" value="{{$doctor->user->name}}">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group input-group-static">
                                    <label for="gender" class="ms-0">Gênero</label>
                                    <select class="form-control @error('gender') is-invalid @enderror" id="gender">
                                        <option disabled selected>Selecione uma das opções...</option>
                                        <option value="Male" @if($doctor->gender == 'Male') selected @endif>Homem
                                        </option>
                                        <option value="Female" @if($doctor->gender == 'Female') selected @endif>Mulher
                                        </option>
                                        <option value="Non binary" @if($doctor->gender == 'Non binary') selected @endif>
                                            Não binário
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group input-group-static">
                                    <label>Data de Nascimento</label>
                                    <input type="text"
                                           class="form-control datepicker @error('birth_date') is-invalid @enderror"
                                           onfocus="focused(this)"
                                           onfocusout="defocused(this)" id="birth_date"
                                           value="{{\Carbon\Carbon::parse($doctor->user->profile['birth_date'])->format('d/m/Y')}}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group input-group-static">
                                    <label>Endereço</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                                           id="address" value="{{$doctor->address}}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group input-group-static">
                                    <label>CPF</label>
                                    <input type="text" class="form-control @error('cpf') is-invalid @enderror" id="cpf"
                                           value="{{$doctor->cpf}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-static">
                                    <label>RG</label>
                                    <input type="text" class="form-control @error('rg') is-invalid @enderror" id="rg"
                                           value="{{$doctor->rg}}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <div class="input-group input-group-static">
                                    <label>Telefone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                           id="phone" value="{{$doctor->phone}}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group input-group-static">
                                    <label>Celular</label>
                                    <input type="text" class="form-control @error('mobile_phone') is-invalid @enderror"
                                           id="mobile_phone" value="{{$doctor->mobile_phone}}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group input-group-static">
                                    <label>Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                           id="email" value="{{$doctor->user->email}}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <div class="input-group input-group-static">
                                    <label>CRM</label>
                                    <input type="text" class="form-control @error('crm') is-invalid @enderror"
                                           value="{{$doctor->crm}}" id="crm">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group input-group-static">
                                    <label>Formação</label>
                                    <input type="text" class="form-control @error('education') is-invalid @enderror"
                                           value="{{$doctor->education}}"
                                           id="education">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group input-group-static">
                                    <label>Especialização</label>
                                    <input type="text" class="form-control @error('specialty') is-invalid @enderror"
                                           value="{{$doctor->specialty[0]['name']}}"
                                           id="specialty">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group input-group-static">
                                    <label>Departamento</label>
                                    <input type="text" class="form-control @error('department') is-invalid @enderror"
                                           id="department" value="{{$doctor->department}}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group input-group-dynamic">
                                    <br>
                                    <textarea class="form-control" rows="7"
                                              placeholder="Diga algumas palavras sobre quem você é ou no que está trabalhando."
                                              spellcheck="false" id="description">{{$doctor->description}}</textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group input-group-static">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control" id="social_facebook"
                                                   value="{{unserialize($doctor->social)[0]}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group input-group-static">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control" id="social_twitter"
                                                   value="{{unserialize($doctor->social)[1]}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group input-group-static">
                                            <label>Instagram</label>
                                            <input type="text" class="form-control" id="social_instagram"
                                                   value="{{unserialize($doctor->social)[2]}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="float-end">
                            <a href="{{route('profile.overview')}}"
                               class="btn bg-gradient-secondary mt-3 mb-0">Voltar</a>
                            <button type="button" class="btn bg-gradient-primary mt-3 mb-0">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"
            integrity="sha512-K/oyQtMXpxI4+K0W7H25UopjM8pzq0yrVdFdG21Fh5dBe91I40pDd9A4lzNlHPHBIP2cwZuoxaUSX0GJSObvGA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/l10n/pt.min.js"
            integrity="sha512-bf3wMf+N6l2c9+iuGQRhed0jz7NvuWDBnfoibBG3+JuFbsH9tHzg2KEb/bLvi73uLtRNhHa2PIb4B8Odj2P+8A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $("#cpf").inputmask("999.999.999-99");
            $("#phone").inputmask("(99) 9999-9999");
            $("#mobile_phone").inputmask("(99) 9 9999-9999");
            $("#crm").inputmask("CRM/aa 999999");
            $(".datepicker").flatpickr({
                dateFormat: "d/m/Y",
                locale: "pt"
            });
        });
    </script>
@endsection
