@extends('layouts.front')
@section('content')
    <div class="col-12 text-center">
        <div class="multisteps-form mb-5">
            <!--progress bar-->
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto my-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <div class="multisteps-form__progress">
                                    <button class="multisteps-form__progress-btn js-active" type="button"
                                            title="User Info">
                                        <span>Dados Gerais</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Address">
                                        <span>Medicação</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Order Info">
                                        <span>Address</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="multisteps-form__form" method="post">
                                @csrf
                                <!--single form panel-->
                                <div class="multisteps-form__panel js-active" data-animation="FadeIn">
                                    <div class="row text-center mt-4">
                                        <div class="col-10 mx-auto">
                                            <h5 class="font-weight-normal">Dados Gerais</h5>
                                        </div>
                                    </div>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-12 mt-4 mt-sm-0 text-start">
                                                <div class="input-group input-group-dynamic mb-4">
                                                    <label class="form-label">Nome da clinica</label>
                                                    <input type="text" class="form-control multisteps-form__input"
                                                           name="clinic_name">
                                                </div>
                                                <div class="input-group input-group-dynamic mb-4">
                                                    <div>
                                                        <label class="form-label">Nome do Paciente</label>
                                                        <br>
                                                        <select
                                                            class="form-control multisteps-form__input @error('patient_id') is-invalid @enderror"
                                                            name="patient_id">
                                                            <option disabled selected>Selecione uma das opções...
                                                            </option>
                                                            @foreach($patients as $patient)
                                                                <option value="{{$patient->id}}">
                                                                    @if($patient->user)
                                                                        {{$patient->user->name}}
                                                                    @else
                                                                        {{\Faker\Provider\pt_BR\Person::firstNameMale()}} {{\Faker\Provider\pt_BR\Person::lastName()}} {{\Faker\Provider\pt_BR\Person::lastName()}}
                                                                    @endif
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-group input-group-dynamic">
                                                    <label class="form-label">Data</label>
                                                    <input type="text" class="form-control multisteps-form__input"
                                                           name="date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                    title="Next">Próximo
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel" data-animation="FadeIn">
                                    <div class="row text-center mt-4">
                                        <div class="col-10 mx-auto">
                                            <h5 class="font-weight-normal">Medicação</h5>
                                        </div>
                                    </div>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-4">
                                            <div class="col-12 col-sm-12 mt-4 mt-sm-0 text-start">
                                                <div class="input-group input-group-dynamic mb-4">
                                                    <label class="form-label">Nome da clinica</label>
                                                    <input type="text" class="form-control multisteps-form__input">
                                                </div>
                                                <div class="input-group input-group-dynamic mb-4">
                                                    <label class="form-label">Nome do Paciente</label>
                                                    <input type="text" class="form-control multisteps-form__input">
                                                </div>
                                                <div class="input-group input-group-dynamic">
                                                    <label class="form-label">Data</label>
                                                    <input type="email" class="form-control multisteps-form__input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-outline-dark mb-0 js-btn-prev" type="button"
                                                    title="Prev">Anterior
                                            </button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                    title="Next">Próximo
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel" data-animation="FadeIn">
                                    <div class="row text-center mt-4">
                                        <div class="col-10 mx-auto">
                                            <h5 class="font-weight-normal">Observações</h5>
                                        </div>
                                    </div>
                                    <div class="multisteps-form__content">
                                        <div class="row text-start">
                                            <div class="col-12 col-md-8 mt-3">
                                                <div class="input-group input-group-static">
                                                    <label>Street Name</label>
                                                    <input type="text" class="form-control multisteps-form__input">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 mt-3">
                                                <div class="input-group input-group-static">
                                                    <label>Street No</label>
                                                    <input class="multisteps-form__input form-control" type="number"/>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7 mt-3">
                                                <div class="input-group input-group-static">
                                                    <label>City</label>
                                                    <input class="multisteps-form__input form-control" type="text"/>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5 ms-auto mt-3 text-start">
                                                <div>
                                                    <label class="form-label mb-0 ms-0">Country</label>
                                                    <select class="form-control" name="choices-country"
                                                            id="choices-country">
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Brasil">Brasil</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn btn-outline-dark mb-0 js-btn-prev" type="button"
                                                        title="Prev">Anterior
                                                </button>
                                                <button class="btn bg-gradient-dark ms-auto mb-0" type="button"
                                                        title="Send">Enviar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
