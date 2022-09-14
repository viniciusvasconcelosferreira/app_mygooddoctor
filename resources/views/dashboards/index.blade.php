@extends('layouts.front')
@section('content')
    <div class="row mb-4">
        <div class="col-lg-4 col-md-6">
            <div class="card" data-animation="true">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                        <img src="{{asset('img/melany-tuinfosalud-com-F6clvre8fGg-unsplash.jpg')}}"
                             alt="img-blur-shadow"
                             class="img-fluid shadow border-radius-lg">
                    </a>
                    <div class="colored-shadow"
                         style="background-image: url({{asset('img/melany-tuinfosalud-com-F6clvre8fGg-unsplash.jpg')}});"></div>
                </div>
                <div class="card-body text-center">
                    <div class="d-flex mt-n6 mx-auto">
                        <a class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip"
                           data-bs-placement="bottom" title="Refresh">
                            <i class="material-icons text-lg">refresh</i>
                        </a>
                        <button class="btn btn-link text-info me-auto border-0" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="Edit">
                            <i class="material-icons text-lg">edit</i>
                        </button>
                    </div>
                    <h5 class="font-weight-normal mt-3">
                        <a href="#">Receitas</a>
                    </h5>
                    <p class="mb-0">
                        Acesse para criar prescrições médicas e visualizar histórico de receitas.
                    </p>
                </div>
                {{--                <hr class="dark horizontal my-0">--}}
                {{--                <div class="card-footer d-flex">--}}
                {{--                    <p class="font-weight-normal my-auto">$899/night</p>--}}
                {{--                    <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>--}}
                {{--                    <p class="text-sm my-auto"> Barcelona, Spain</p>--}}
                {{--                </div>--}}
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="card" data-animation="true">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                        <img src="{{asset('img/testalize-me-0jE8ynV4mis-unsplash.jpg')}}" alt="img-blur-shadow"
                             class="img-fluid shadow border-radius-lg">
                    </a>
                    <div class="colored-shadow"
                         style="background-image: url({{asset('img/testalize-me-0jE8ynV4mis-unsplash.jpg')}});"></div>
                </div>
                <div class="card-body text-center">
                    <div class="d-flex mt-n6 mx-auto">
                        <a class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip"
                           data-bs-placement="bottom" title="Refresh">
                            <i class="material-icons text-lg">refresh</i>
                        </a>
                        <button class="btn btn-link text-info me-auto border-0" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="Edit">
                            <i class="material-icons text-lg">edit</i>
                        </button>
                    </div>
                    <h5 class="font-weight-normal mt-3">
                        <a href="#">Exames</a>
                    </h5>
                    <p class="mb-0">
                        Acesse todos os resultados dos exames clínicos do paciente.
                    </p>
                </div>
                {{--                <hr class="dark horizontal my-0">--}}
                {{--                <div class="card-footer d-flex">--}}
                {{--                    <p class="font-weight-normal my-auto">$1.119/night</p>--}}
                {{--                    <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>--}}
                {{--                    <p class="text-sm my-auto"> London, UK</p>--}}
                {{--                </div>--}}
            </div>
        </div>
        <div class="col-lg-4 mt-5 mt-lg-0">
            <div class="card" data-animation="true">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                        <img src="{{asset('img/matheus-ferrero-yfmjALh1S6s-unsplash.jpg')}}" alt="img-blur-shadow"
                             class="img-fluid shadow border-radius-lg">
                    </a>
                    <div class="colored-shadow"
                         style="background-image: url({{asset('img/matheus-ferrero-yfmjALh1S6s-unsplash.jpg')}});"></div>
                </div>
                <div class="card-body text-center">
                    <div class="d-flex mt-n6 mx-auto">
                        <a class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip"
                           data-bs-placement="bottom" title="Refresh">
                            <i class="material-icons text-lg">refresh</i>
                        </a>
                        <button class="btn btn-link text-info me-auto border-0" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="Edit">
                            <i class="material-icons text-lg">edit</i>
                        </button>
                    </div>
                    <h5 class="font-weight-normal mt-3">
                        <a href="#">Pacientes</a>
                    </h5>
                    <p class="mb-0">
                        Visualize detalhes sobre seus pacientes.
                    </p>
                </div>
                {{--                <hr class="dark horizontal my-0">--}}
                {{--                <div class="card-footer d-flex">--}}
                {{--                    <p class="font-weight-normal my-auto">$459/night</p>--}}
                {{--                    <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>--}}
                {{--                    <p class="text-sm my-auto"> Milan, Italy</p>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <div class="chart">
                            <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">Pacientes por dia da semana</h6>
                    <p class="text-sm ">Veja os atendimentos você tem essa semana</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2  ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 "> Novos pacientes por mês </h6>
                    <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) a mais que o mês passado. </p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 text-sm"> updated 4 min ago </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                        <div class="chart">
                            <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">Veja seu histórico de atividades</h6>
                    <p class="text-sm ">Last Campaign Performance</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 text-sm">just updated</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Se", "Te", "Qa", "Qi", "Sx", "Sa", "Do"],
                datasets: [{
                    label: "Sales",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "rgba(255, 255, 255, .8)",
                    data: [50, 20, 10, 22, 50, 10, 40],
                    maxBarThickness: 6
                },],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#fff"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Abr", "Maio", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

        new Chart(ctx3, {
            type: "line",
            data: {
                labels: ["Abr", "Maio", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#f8f9fa',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        // Initialize the vector map
        var map = new jsVectorMap({
            selector: "#map",
            map: "world_merc",
            zoomOnScroll: false,
            zoomButtons: false,
            selectedMarkers: [1, 3],
            markersSelectable: true,
            markers: [{
                name: "USA",
                coords: [40.71296415909766, -74.00437720027804]
            },
                {
                    name: "Germany",
                    coords: [51.17661451970939, 10.97947735117339]
                },
                {
                    name: "Brazil",
                    coords: [-7.596735421549542, -54.781694323779185]
                },
                {
                    name: "Russia",
                    coords: [62.318222797104276, 89.81564777631716]
                },
                {
                    name: "China",
                    coords: [22.320178999475512, 114.17161225541399],
                    style: {
                        fill: '#E91E63'
                    }
                }
            ],
            markerStyle: {
                initial: {
                    fill: "#e91e63"
                },
                hover: {
                    fill: "E91E63"
                },
                selected: {
                    fill: "E91E63"
                }
            },


        });
    </script>
@endsection
