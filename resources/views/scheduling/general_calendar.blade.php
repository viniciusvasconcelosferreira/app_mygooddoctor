@extends('layouts.front')
@section('content')
    <div class="row">
        <div class="col-xl-9">
            <div class="card card-calendar">
                <div class="card-body p-3">
                    <div class="calendar" data-bs-toggle="calendar" id="calendar"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="row">
                <div class="col-xl-12 col-md-6 mt-xl-0 mt-4">
                    <div class="card">
                        <div class="card-header p-3 pb-0">
                            <h6 class="mb-0">Próximos Eventos</h6>
                        </div>
                        <div class="card-body border-radius-lg p-3">
                            <div class="d-flex">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center">
                                    <i class="material-icons opacity-10 pt-1">person</i>
                                </div>
                                <div class="ms-3">
                                    <div class="numbers">
                                        <h6 class="mb-1 text-dark text-sm">{{\Faker\Provider\pt_BR\Person::firstNameFemale()}} {{\Faker\Provider\pt_BR\Person::lastName()}} {{\Faker\Provider\pt_BR\Person::lastName()}}</h6>
                                        <span class="text-sm">27 Março 2021, às 12:30 PM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-4">
                                <div class="icon icon-shape bg-gradient-secondary shadow text-center">
                                    <i class="material-icons opacity-10 pt-1">person</i>
                                </div>
                                <div class="ms-3">
                                    <div class="numbers">
                                        <h6 class="mb-1 text-dark text-sm">{{\Faker\Provider\pt_BR\Person::firstNameFemale()}} {{\Faker\Provider\pt_BR\Person::lastName()}} {{\Faker\Provider\pt_BR\Person::lastName()}}</h6>
                                        <span class="text-sm">24 Março 2021, às 10:00 PM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-4">
                                <div class="icon icon-shape bg-gradient-success shadow text-center">
                                    <i class="material-icons opacity-10 pt-1">person</i>
                                </div>
                                <div class="ms-3">
                                    <div class="numbers">
                                        <h6 class="mb-1 text-dark text-sm">{{\Faker\Provider\pt_BR\Person::firstNameFemale()}} {{\Faker\Provider\pt_BR\Person::lastName()}} {{\Faker\Provider\pt_BR\Person::lastName()}}</h6>
                                        <span class="text-sm">25 Março 2021, às 9:30 AM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-4">
                                <div class="icon icon-shape bg-gradient-info shadow text-center">
                                    <i class="material-icons opacity-10 pt-1">person</i>
                                </div>
                                <div class="ms-3">
                                    <div class="numbers">
                                        <h6 class="mb-1 text-dark text-sm">{{\Faker\Provider\pt_BR\Person::firstNameFemale()}} {{\Faker\Provider\pt_BR\Person::lastName()}} {{\Faker\Provider\pt_BR\Person::lastName()}}</h6>
                                        <span class="text-sm">25 Março 2021, às 2:00 PM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-4">
                                <div class="icon icon-shape bg-gradient-danger shadow text-center">
                                    <i class="material-icons opacity-10 pt-1">person</i>
                                </div>
                                <div class="ms-3">
                                    <div class="numbers">
                                        <h6 class="mb-1 text-dark text-sm">{{\Faker\Provider\pt_BR\Person::firstNameFemale()}} {{\Faker\Provider\pt_BR\Person::lastName()}} {{\Faker\Provider\pt_BR\Person::lastName()}}</h6>
                                        <span class="text-sm">26 Março 2021, às 9:00 AM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-6 mt-4">
                    <div class="card bg-gradient-primary">
                        <div class="card-header bg-transparent p-3 pb-0">
                            <div class="row" style="padding: 20px">
                                <div class="col-12 text-center">
                                    <h2 class="text-white">Agendar nova consulta</h2>
                                </div>
                            </div>
                        </div>
                        {{--                        <div class="card-body p-0">--}}
                        {{--                            <div class="chart">--}}
                        {{--                                <canvas id="chart-line-1" class="chart-canvas" height="100"></canvas>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        var calendar = new FullCalendar.Calendar(document.getElementById("calendar"), {
            contentHeight: 'auto',
            initialView: "dayGridMonth",
            headerToolbar: {
                start: 'title', // will normally be on the left. if RTL, will be on the right
                center: '',
                end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
            },
            selectable: true,
            editable: true,
            initialDate: '2020-12-01',
            events: [{
                title: '1',
                start: '2020-11-18',
                end: '2020-11-18',
                className: 'bg-gradient-danger'
            },

                {
                    title: '2',
                    start: '2020-11-21',
                    end: '2020-11-22',
                    className: 'bg-gradient-warning'
                },

                {
                    title: '3',
                    start: '2020-11-29',
                    end: '2020-11-29',
                    className: 'bg-gradient-success'
                },

                {
                    title: '4',
                    start: '2020-12-01',
                    end: '2020-12-01',
                    className: 'bg-gradient-info'
                },

                {
                    title: '5',
                    start: '2020-12-03',
                    end: '2020-12-03',
                    className: 'bg-gradient-danger'
                },

                {
                    title: '6',
                    start: '2020-12-07',
                    end: '2020-12-09',
                    className: 'bg-gradient-warning'
                },

                {
                    title: '7',
                    start: '2020-12-10',
                    end: '2020-12-10',
                    className: 'bg-gradient-primary'
                },

                {
                    title: '8',
                    start: '2020-12-19',
                    end: '2020-12-19',
                    className: 'bg-gradient-danger'
                },

                {
                    title: '9',
                    start: '2020-12-23',
                    end: '2020-12-23',
                    className: 'bg-gradient-info'
                },

                {
                    title: '10',
                    start: '2020-12-02',
                    end: '2020-12-02',
                    className: 'bg-gradient-warning'
                },

            ],
            views: {
                month: {
                    titleFormat: {
                        month: "long",
                        year: "numeric"
                    }
                },
                agendaWeek: {
                    titleFormat: {
                        month: "long",
                        year: "numeric",
                        day: "numeric"
                    }
                },
                agendaDay: {
                    titleFormat: {
                        month: "short",
                        year: "numeric",
                        day: "numeric"
                    }
                }
            },
        });

        calendar.render();

        var ctx1 = document.getElementById("chart-line-1").getContext("2d");

        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Visitors",
                    tension: 0.5,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fff",
                    borderWidth: 2,
                    backgroundColor: "transparent",
                    data: [50, 45, 60, 60, 80, 65, 90, 80, 100],
                    maxBarThickness: 6,
                    fill: true
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
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                },
            },
        });
    </script>
@endsection
