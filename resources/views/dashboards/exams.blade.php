@extends('layouts.front')
@section('content')
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card mt-4">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 float-start">
                        <i class="material-icons opacity-10">splitscreen</i>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mb-0">Hemograma com contagem de Plaquetas - Série Vermelha</h6>
                        </div>
                        {{--                        <div class="col-md-6 d-flex justify-content-end align-items-center">--}}
                        {{--                            <small>23 - 30 March 2020</small>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                <div class="card-body p-3 pt-4">
                    <ul class="list-group list-group-flush" data-toggle="checklist">
                        <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                            <div class="checklist-item checklist-item-primary ps-2 ms-3">
                                <div class="d-flex align-items-center ms-4 mt-3 ps-1">
                                    <div>
                                        <p class="mb-0 text-secondary">Hemácias</p>
                                        {{--                                        <span class="text-xs">24 March 2019</span>--}}
                                    </div>
                                    <div class="ms-auto">
                                        <p class="mb-0 text-secondary">Resultado</p>
                                        <span class="text-xs">4,39 10^6/µ L</span>
                                    </div>
                                    &nbsp;
                                    <div class="me-auto">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                                        </button>
                                    </div>
                                    <div class="mx-auto">
                                        <p class="mb-0 text-secondary">Intervalo de Referência</p>
                                        <span class="text-xs">3,80 a 4,80 10^6/µ L</span>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark mt-4 mb-0">
                        </li>
                        <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                            <div class="checklist-item checklist-item-dark ps-2 ms-3">
                                <div class="d-flex justify-content-between align-items-center ms-4 mt-3 ps-1">
                                    <div>
                                        <p class="mb-0 text-secondary">Hemoglobina</p>
                                        {{--                                        <span class="text-xs">24 March 2019</span>--}}
                                    </div>
                                    <div class="ms-auto">
                                        <p class="mb-0 text-secondary">Resultado</p>
                                        <span class="text-xs">13,8 g/dL</span>
                                    </div>
                                    &nbsp;
                                    <div class="me-auto">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                                        </button>
                                    </div>
                                    <div class="mx-auto">
                                        <p class="mb-0 text-secondary">Intervalo de Referência</p>
                                        <span class="text-xs">12,0 a 15,0 g/dL</span>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark mt-4 mb-0">
                        </li>
                        <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                            <div class="checklist-item checklist-item-dark ps-2 ms-3">
                                <div class="d-flex justify-content-between align-items-center ms-4 mt-3 ps-1">
                                    <div>
                                        <p class="mb-0 text-secondary">Hematócrito</p>
                                        {{--                                        <span class="text-xs">24 March 2019</span>--}}
                                    </div>
                                    <div class="ms-auto">
                                        <p class="mb-0 text-secondary">Resultado</p>
                                        <span class="text-xs">39,4 %</span>
                                    </div>
                                    &nbsp;
                                    <div class="me-auto">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                                        </button>
                                    </div>
                                    <div class="mx-auto">
                                        <p class="mb-0 text-secondary">Intervalo de Referência</p>
                                        <span class="text-xs">36,0 a 46,0%</span>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark mt-4 mb-0">
                        </li>
                        <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                            <div class="checklist-item checklist-item-dark ps-2 ms-3">
                                <div class="d-flex justify-content-between align-items-center ms-4 mt-3 ps-1">
                                    <div>
                                        <p class="mb-0 text-secondary">Média VGM</p>
                                        {{--                                        <span class="text-xs">24 March 2019</span>--}}
                                    </div>
                                    <div class="ms-auto">
                                        <p class="mb-0 text-secondary">Resultado</p>
                                        <span class="text-xs">89,7 fL</span>
                                    </div>
                                    &nbsp;
                                    <div class="me-auto">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                                        </button>
                                    </div>
                                    <div class="mx-auto">
                                        <p class="mb-0 text-secondary">Intervalo de Referência</p>
                                        <span class="text-xs">83,0 a 101,0 fL</span>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark mt-4 mb-0">
                        </li>
                        <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                            <div class="checklist-item checklist-item-warning ps-2 ms-3">
                                <div class="d-flex justify-content-between align-items-center ms-4 mt-3 ps-1">
                                    <div>
                                        <p class="mb-0 text-secondary">Média HGM</p>
                                        {{--                                        <span class="text-xs">25 March 2019</span>--}}
                                    </div>
                                    <div class="ms-auto">
                                        <p class="mb-0 text-secondary">Resultado</p>
                                        <span class="text-xs">31,5 pg</span>
                                    </div>
                                    &nbsp;
                                    <div class="me-auto">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                                        </button>
                                    </div>
                                    <div class="mx-auto">
                                        <p class="mb-0 text-secondary">Intervalo de Referência</p>
                                        <span class="text-xs">27,0 a 32,0 pg</span>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark mt-4 mb-0">
                        </li>
                        <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                            <div class="checklist-item checklist-item-success ps-2 ms-3">
                                <div class="d-flex justify-content-between align-items-center ms-4 mt-3 ps-1">
                                    <div>
                                        <p class="mb-0 text-secondary">Média CHGM</p>
                                        {{--                                        <span class="text-xs font-weight-bolder">26 March 2019</span>--}}
                                    </div>
                                    <div class="ms-auto">
                                        <p class="mb-0 text-secondary">Resultado</p>
                                        <span class="text-xs">35,1 g/dL</span>
                                    </div>
                                    &nbsp;
                                    <div class="me-auto">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                                        </button>
                                    </div>
                                    <div class="mx-auto">
                                        <p class="mb-0 text-secondary">Intervalo de Referência</p>
                                        <span class="text-xs">31,0 a 36,0 g/dL</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <h5 class="mb-0">Histórico</h5>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6 col-12">
            <div class="card z-index-2 mt-4">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 me-3 float-start">
                        <i class="material-icons opacity-10">leaderboard</i>
                    </div>
                    <h6 class="mb-0">Colesterol</h6>
                    {{--                    <p class="mb-0 text-sm">Sales related to age average</p>--}}
                </div>
                <div class="card-body p-3 pt-0">
                    <div class="chart">
                        <canvas id="bar-chart" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 mt-md-0 mt-4">
            <div class="card z-index-2 mt-4">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 me-3 float-start">
                        <i class="material-icons opacity-10">splitscreen</i>
                    </div>
                    <h6 class="mb-0">Creatina</h6>
                    {{--                    <p class="mb-0 text-sm">Sales related to age average</p>--}}
                </div>
                <div class="card-body p-3 pt-0">
                    <div class="chart">
                        <canvas id="bar-chart-horizontal" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6 col-12">
            <div class="card z-index-2 mt-4">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 me-3 float-start">
                        <i class="material-icons opacity-10">insights</i>
                    </div>
                    <div class="d-block d-md-flex">
                        <div class="me-auto">
                            <h6 class="mb-0">Hemograma</h6>
                            {{--                            <p class="mb-0 text-sm">Product insights</p>--}}
                        </div>

                        <span class="badge badge-lg badge-dot me-4 d-inline-block text-start">
                  <i class="bg-dark"></i>
                  <span class="text-dark">Referência</span>
                </span>
                    </div>
                </div>
                <div class="card-body p-3 pt-0">
                    <div class="chart">
                        <canvas id="line-chart" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 mt-md-0 mt-4">
            <div class="card z-index-2 mt-4">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 me-3 float-start">
                        <i class="material-icons opacity-10">show_chart</i>
                    </div>
                    <div class="d-block d-md-flex">
                        <div class="me-auto">
                            <h6 class="mb-0">Hemoglobina Glicada</h6>
                            {{--                            <p class="mb-0 text-sm">Visits from devices</p>--}}
                        </div>
                        <span class="badge badge-lg badge-dot me-4 d-inline-block text-start">
                  <i class="bg-dark"></i>
                  <span class="text-dark">Referência</span>
                </span>
                    </div>
                </div>
                <div class="card-body p-3 pt-0">
                    <div class="chart">
                        <canvas id="line-chart-gradient" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        // Line chart
        var ctx1 = document.getElementById("line-chart").getContext("2d");

        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Organic Search",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#e91e63",
                    borderColor: "#e91e63",
                    borderWidth: 3,
                    backgroundColor: "transparent",
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6
                },
                    {
                        label: "Referral",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#3A416F",
                        borderColor: "#3A416F",
                        borderWidth: 3,
                        backgroundColor: "transparent",
                        data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                        maxBarThickness: 6
                    },
                    {
                        label: "Direct",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#03A9F4",
                        borderColor: "#03A9F4",
                        borderWidth: 3,
                        backgroundColor: "transparent",
                        data: [40, 80, 70, 90, 30, 90, 140, 130, 200],
                        maxBarThickness: 6
                    },
                ],
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
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#b2b9bf',
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
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: true,
                            borderDash: [5, 5],
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            color: '#b2b9bf',
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

        // Line chart with gradient
        var ctx2 = document.getElementById("line-chart-gradient").getContext("2d");

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#e91e63",
                    borderWidth: 3,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                },
                    {
                        label: "Websites",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#3A416F",
                        borderWidth: 3,
                        backgroundColor: "transparent",
                        fill: true,
                        data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                        maxBarThickness: 6
                    },
                ],
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
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#b2b9bf',
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
                            borderDash: [5, 5],
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            color: '#b2b9bf',
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

        // Bar chart
        var ctx5 = document.getElementById("bar-chart").getContext("2d");

        new Chart(ctx5, {
            type: "bar",
            data: {
                labels: ['16-20', '21-25', '26-30', '31-36', '36-42', '42+'],
                datasets: [{
                    label: "Sales by age",
                    weight: 5,
                    borderWidth: 0,
                    borderRadius: 4,
                    backgroundColor: '#3A416F',
                    data: [15, 20, 12, 60, 20, 15],
                    fill: false,
                    maxBarThickness: 35
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
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#9ca2b7',
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
                            drawOnChartArea: true,
                            drawTicks: true,
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            color: '#9ca2b7',
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

        // Bar chart horizontal
        var ctx6 = document.getElementById("bar-chart-horizontal").getContext("2d");

        new Chart(ctx6, {
            type: "bar",
            data: {
                labels: ['16-20', '21-25', '26-30', '31-36', '36-42', '42+'],
                datasets: [{
                    label: "Sales by age",
                    weight: 5,
                    borderWidth: 0,
                    borderRadius: 4,
                    backgroundColor: '#3A416F',
                    data: [15, 20, 12, 60, 20, 15],
                    fill: false
                }],
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#9ca2b7',
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
                            drawOnChartArea: true,
                            drawTicks: true,
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            color: '#9ca2b7',
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
    </script>
@endsection
