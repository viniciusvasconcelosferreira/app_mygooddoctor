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
                                            title="Dados Gerais">
                                        <span>Dados Gerais</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Medicação">
                                        <span>Medicação</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Observações">
                                        <span>Observações</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="multisteps-form__form" method="post"
                                  action="{{route('dashboards.prescription.store')}}">
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
                                                    <div class="col-12 col-sm-12 mt-4 mt-sm-0 text-start">
                                                        <label class="form-label mb-0 ms-0">Nome do Paciente</label>
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
                                                    <input type="text"
                                                           class="form-control multisteps-form__input datepicker"
                                                           name="date" onfocus="focused(this)"
                                                           onfocusout="defocused(this)">
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
                                            <div class="col-12 col-md-12">
                                                <div class="input-group input-group-dynamic mb-4">
                                                    <label class="form-label">Nome</label>
                                                    <input type="text" class="form-control multisteps-form__input"
                                                           name="medication_name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <div class="input-group input-group-dynamic mb-4">
                                                    <label class="form-label">Dosagem</label>
                                                    <input type="text" class="form-control multisteps-form__input"
                                                           name="dosage">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <div class="row">
                                                    <div class="col-12 col-md-6" style="margin-top: 1.5rem !important;">
                                                        <div class="input-group input-group-dynamic">
                                                            <label class="form-label">Periodo</label>
                                                            <input type="text"
                                                                   class="form-control multisteps-form__input"
                                                                   name="period">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="input-group input-group-dynamic mb-4">
                                                            <div class="col-12 col-sm-12 mt-4 mt-sm-0 text-start">
                                                                <label class="form-label mb-0 ms-0">Forma de uso</label>
                                                                <br>
                                                                <select
                                                                    class="form-control multisteps-form__input"
                                                                    name="way_use">
                                                                    <option disabled selected>Selecione uma das
                                                                        opções...
                                                                    </option>
                                                                    <option value="oral">Oral</option>
                                                                    <option value="parenteral">Parenteral</option>
                                                                    <option value="retal">Retal</option>
                                                                    <option value="vaginal">Vaginal</option>
                                                                    <option value="oftálmica">Oftálmica</option>
                                                                    <option value="aérea (via pulmonar)">Aérea (via
                                                                        pulmonar)
                                                                    </option>
                                                                    <option value="auricular">Auricular</option>
                                                                    <option value="cutânea">Cutânea</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                            <div class="col-12 col-md-12 ms-auto mt-3 text-start">
                                                <div class="input-group input-group-dynamic mb-4">
                                                    <textarea class="form-control" rows="7"
                                                              placeholder="Utilize esse campo se quiser adicionar algum detalhe"
                                                              spellcheck="false" name="observation"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn btn-outline-dark mb-0 js-btn-prev" type="button"
                                                        title="Prev">Anterior
                                                </button>
                                                <button class="btn bg-gradient-dark ms-auto mb-0" type="submit"
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"
            integrity="sha512-K/oyQtMXpxI4+K0W7H25UopjM8pzq0yrVdFdG21Fh5dBe91I40pDd9A4lzNlHPHBIP2cwZuoxaUSX0GJSObvGA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/l10n/pt.min.js"
            integrity="sha512-bf3wMf+N6l2c9+iuGQRhed0jz7NvuWDBnfoibBG3+JuFbsH9tHzg2KEb/bLvi73uLtRNhHa2PIb4B8Odj2P+8A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function () {
            $(".datepicker").flatpickr({
                // dateFormat: "d/m/Y",
                locale: "pt"
            });
        });
    </script>
@endsection
