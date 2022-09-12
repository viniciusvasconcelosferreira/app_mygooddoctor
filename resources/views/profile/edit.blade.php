@extends('layouts.front-profile')
@section('stylesheets')
    <style>
        .choices__inner {
            border: none;
            background: none;
            padding: 0;
        }
    </style>
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
                    <h5>Informação básica</h5>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group input-group-static">
                                <label>Nome</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <label class="form-label mt-4 ms-0">Eu sou</label>
                            <select class="form-control" name="choices-gender" id="choices-gender">
                                <option value="Male">Homem</option>
                                <option value="Female">Mulher</option>
                                <option value="Non binary">Não binário</option>
                            </select>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-5 col-5">
                                    <label class="form-label mt-4 ms-0">Data de Nascimento</label>
                                    <select class="form-control" name="choices-month" id="choices-month"></select>
                                </div>
                                <div class="col-sm-4 col-3">
                                    <label class="form-label mt-4 ms-0">&nbsp;</label>
                                    <select class="form-control" name="choices-day" id="choices-day"></select>
                                </div>
                                <div class="col-sm-3 col-4">
                                    <label class="form-label mt-4">&nbsp;</label>
                                    <select class="form-control" name="choices-year" id="choices-year"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="input-group input-group-static">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="example@email.com">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static">
                                <label>Confirm Email</label>
                                <input type="email" class="form-control" placeholder="example@email.com">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="input-group input-group-static">
                                <label>Your location</label>
                                <input type="text" class="form-control" placeholder="Sydney, A">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static">
                                <label>Phone Number</label>
                                <input type="number" class="form-control" placeholder="+40 735 631 620">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <label class="form-label mt-4 ms-0">Language</label>
                            <select class="form-control" name="choices-language" id="choices-language">
                                <option value="English">English</option>
                                <option value="French">French</option>
                                <option value="Spanish">Spanish</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label mt-4">Skills</label>
                            <input class="form-control" id="choices-skills" type="text" value="vuejs, angular, react"
                                   placeholder="Enter something" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        if (document.getElementById("choices-gender")) {
            var gender = document.getElementById("choices-gender");
            const example = new Choices(gender, {
                itemSelectText: "Pressione para selecionar"
            });
        }

        if (document.getElementById("choices-language")) {
            var language = document.getElementById("choices-language");
            const example = new Choices(language, {
                itemSelectText: "Pressione para selecionar"
            });
        }

        if (document.getElementById("choices-skills")) {
            var skills = document.getElementById("choices-skills");
            const example = new Choices(skills, {
                delimiter: ",",
                editItems: true,
                maxItemCount: 5,
                removeItemButton: true,
                addItems: true
            });
        }

        if (document.getElementById("choices-year")) {
            var year = document.getElementById("choices-year");
            setTimeout(function() {
                const example = new Choices(year);
            }, 1);

            for (y = 1900; y <= 2020; y++) {
                var optn = document.createElement("OPTION");
                optn.text = y;
                optn.value = y;

                if (y == 2020) {
                    optn.selected = true;
                }

                year.options.add(optn);
            }
        }

        if (document.getElementById("choices-day")) {
            var day = document.getElementById("choices-day");
            setTimeout(function() {
                const example = new Choices(day);
            }, 1);


            for (y = 1; y <= 31; y++) {
                var optn = document.createElement("OPTION");
                optn.text = y;
                optn.value = y;

                if (y == 1) {
                    optn.selected = true;
                }

                day.options.add(optn);
            }

        }

        if (document.getElementById("choices-month")) {
            var month = document.getElementById("choices-month");
            setTimeout(function() {
                const example = new Choices(month, {
                    itemSelectText: "Pressione para selecionar"
                });
            }, 1);

            var d = new Date();
            var monthArray = new Array();
            monthArray[0] = "Janeiro";
            monthArray[1] = "Fevereiro";
            monthArray[2] = "Março";
            monthArray[3] = "Abril";
            monthArray[4] = "Maio";
            monthArray[5] = "Junho";
            monthArray[6] = "Julho";
            monthArray[7] = "Agosto";
            monthArray[8] = "Setembro";
            monthArray[9] = "Outubro";
            monthArray[10] = "Novembro";
            monthArray[11] = "Dezembro";
            for (m = 0; m <= 11; m++) {
                var optn = document.createElement("OPTION");
                optn.text = monthArray[m];
                // server side month start from one
                optn.value = (m + 1);
                // if june selected
                if (m == 1) {
                    optn.selected = true;
                }
                month.options.add(optn);
            }
        }
    </script>
@endsection
