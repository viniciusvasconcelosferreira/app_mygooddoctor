@extends('layouts.front-invoice')
@section('content')
    <form class="" action="index.html" method="post">
        <div class="card my-sm-5">
            <div class="card-header text-center">
                <div class="row justify-content-between">
                    <div class="col-md-4 text-start">
                        <img class="mb-2 w-25 p-2" src="{{asset('img/logo-ct-dark.png')}}" alt="Logo">
                        <h6>
                            @if($prescription->clinic_name)
                                {{$prescription->clinic_name}}
                            @else
                                {{\Faker\Provider\pt_PT\Address::streetPrefix()}}
                                {{\Faker\Provider\pt_PT\Address::postcode()}}
                                {{\Faker\Provider\pt_PT\Address::citySuffix()}}
                            @endif
                        </h6>
                        <p class="d-block text-secondary">tel: {{\Faker\Provider\pt_BR\PhoneNumber::cellphone()}}</p>
                    </div>
                    <div class="col-lg-3 col-md-7 text-md-end text-start mt-5">
                        <h6 class="d-block mt-2 mb-0">Prescrito
                            para: @if($prescription->patient->user)
                                {{$prescription->patient->user->name}}
                            @else
                                {{\Faker\Provider\pt_BR\Person::firstNameMale()}}
                                {{\Faker\Provider\pt_BR\Person::lastName()}}
                                {{\Faker\Provider\pt_BR\Person::lastName()}}
                            @endif</h6>
                        <p class="text-secondary">@if($prescription->patient->user)
                                {{$prescription->patient->address}}
                            @else
                                {{\Faker\Provider\pt_PT\Address::streetPrefix()}}
                                {{\Faker\Provider\pt_PT\Address::postcode()}}
                                {{\Faker\Provider\pt_PT\Address::citySuffix()}}
                            @endif
                        </p>
                    </div>
                </div>
                <br>
                <div class="row justify-content-md-between">
                    <div class="col-md-4 mt-auto">
                        <h6 class="mb-0 text-start text-secondary font-weight-normal">
                            Prescrição nº
                        </h6>
                        <h5 class="text-start mb-0">
                            @if($prescription->patient->user)
                                #{{$prescription->id}}
                            @else
                                #{{\Faker\Provider\pt_BR\Payment::randomNumber()}}
                            @endif
                        </h5>
                    </div>
                    <div class="col-lg-5 col-md-7 mt-auto">
                        <div class="row mt-md-5 mt-4 text-md-end text-start">
                            <div class="col-md-6">
                                <h6 class="text-secondary font-weight-normal mb-0">Data:</h6>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-dark mb-0">
                                    @if($prescription->patient->user)
                                        {{\Carbon\Carbon::parse($prescription->date)->format('d/m/Y')}}
                                    @else
                                        {{\Carbon\Carbon::parse(\Faker\Provider\DateTime::date())->format('d/m/Y')}}
                                    @endif
                                </h6>
                            </div>
                        </div>
                        <div class="row text-md-end text-start">
                            <div class="col-md-6">
                                <h6 class="text-secondary font-weight-normal mb-0">Periodo:</h6>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-dark mb-0">
                                    @if($prescription->patient->user)
                                        {{str_replace('há','A cada',\Carbon\Carbon::parse($prescription->period)->diffForHumans())}}
                                    @else
                                        {{str_replace('há','A cada',\Carbon\Carbon::parse(\Faker\Provider\DateTime::date())->diffForHumans())}}
                                    @endif
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table text-right">
                                <thead>
                                <tr>
                                    <th scope="col" class="pe-2 text-start ps-2">Item</th>
                                    <th scope="col" class="pe-2">Dosagem</th>
                                    <th scope="col" class="pe-2" colspan="2">Forma de Uso</th>
                                    <th scope="col" class="pe-2">Observação</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-start">{{$prescription->medication_name}}</td>
                                    <td class="ps-4">{{$prescription->dosage}}</td>
                                    <td class="ps-4" colspan="2">{{$prescription->way_use}}</td>
                                    <td class="ps-4">{{$prescription->observation}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer mt-md-5 mt-4">
                <div class="row">
                    <div class="col-lg-5 text-left">
                        <h5>Obrigado!</h5>
                        <p class="text-secondary text-sm">Se você encontrar algum problema relacionado à prescrição,
                            entre em contato conosco em:</p>
                        <h6 class="text-secondary font-weight-normal mb-0">
                            email:
                            <span class="text-dark">{{auth()->user()->email}}</span>
                        </h6>
                    </div>
                    <div class="col-lg-7 text-md-end mt-md-0 mt-3">
                        <a href="{{route('dashboards.prescriptions')}}" class="btn bg-gradient-secondary mt-lg-7 mb-0">Voltar
                        </a>
                        <button class="btn bg-gradient-info mt-lg-7 mb-0" onClick="window.print()" type="button"
                                name="button">Imprimir
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
