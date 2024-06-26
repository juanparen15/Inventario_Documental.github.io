@extends('layouts.admin')
@section('title', 'Panel administrador')
@section('style')

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Panel Administrador</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                @if (auth()->user()->hasRole('Supervisor'))
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $adquisiciones1 }}</h3>
                                    <p>Inventario</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>{{ $users }}</h3>
                                    <p>Usuarios</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-maroon">
                                <div class="inner">
                                    <h3>{{ $dependencias }}</h3>
                                    <p>Dependencias</p>
                                </div>
                                <div class="icon">
                                    <i class="fab fa-xbox"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-pink">
                                <div class="inner">
                                    <h3>{{ $areas }}</h3>
                                    <p>Areas</p>
                                </div>
                                <div class="icon">
                                    <i class="fab fa-playstation"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if (auth()->user()->hasRole('Admin'))
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $adquisiciones1 }}</h3>
                                    <p>Inventario</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <a href="{{ route('planadquisiciones.index') }}" class="small-box-footer">Ver Todo
                                    <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>{{ $users }}</h3>
                                    <p>Usuarios</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <a href="{{ route('users.index') }}" class="small-box-footer">Ver todo <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <!-- <div class="col-lg-3 col-6">
                                                                                                                                                                                                                                                                             small box
                                                                                                                                                                                                                                                                            <div class="small-box bg-success">
                                                                                                                                                                                                                                                                                <div class="inner">
                                                                                                                                                                                                                                                                                    <h3>{{ $products }}</h3>
                                                                                                                                                                                                                                                                                    <p>Productos</p>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <div class="icon">
                                                                                                                                                                                                                                                                                    <i class="fab fa-bitcoin"></i>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <a href="{{ route('admin.productos.index') }}" class="small-box-footer">Ver Todo <i class="fas fa-arrow-circle-right"></i></a>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div> -->
                        <!-- ./col -->
                        <!-- <div class="col-lg-3 col-6">
                                                                                                                                                                                                                                                                             small box --
                                                                                                                                                                                                                                                                            <div class="small-box bg-warning">
                                                                                                                                                                                                                                                                                <div class="inner">
                                                                                                                                                                                                                                                                                    <h3>{{ $clases }}</h3>
                                                                                                                                                                                                                                                                                    <p>Clases</p>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <div class="icon">
                                                                                                                                                                                                                                                                                    <i class="fas fa-calendar-alt"></i>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <a href="{{ route('admin.clases.index') }}" class="small-box-footer">Ver Todo <i class="fas fa-arrow-circle-right"></i></a>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div> -->
                        <!-- <div class="col-lg-3 col-6">
                                                                                                                                                                                                                                                                             small box
                                                                                                                                                                                                                                                                            <div class="small-box bg-dark">
                                                                                                                                                                                                                                                                                <div class="inner">
                                                                                                                                                                                                                                                                                    <h3>{{ $familias }}</h3>
                                                                                                                                                                                                                                                                                    <p>Familias</p>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <div class="icon">
                                                                                                                                                                                                                                                                                    <i class="fas fa-users"></i>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <a href="{{ route('admin.familias.index') }}" class="small-box-footer">Ver Todo <i class="fas fa-arrow-circle-right"></i></a>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div> -->
                        <!-- <div class="col-lg-3 col-6">
                                                                                                                                                                                                                                                                             small box
                                                                                                                                                                                                                                                                            <div class="small-box bg-purple">
                                                                                                                                                                                                                                                                                <div class="inner">
                                                                                                                                                                                                                                                                                    <h3>{{ $segmentos }}</h3>
                                                                                                                                                                                                                                                                                    <p>Segmentos</p>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <div class="icon">
                                                                                                                                                                                                                                                                                    <i class="fas fa-chess-king"></i>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <a href="{{ route('admin.segmentos.index') }}" class="small-box-footer">Ver Todo <i class="fas fa-arrow-circle-right"></i></a>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div> -->
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-maroon">
                                <div class="inner">
                                    <h3>{{ $dependencias }}</h3>
                                    <p>Dependencias</p>
                                </div>
                                <div class="icon">
                                    <i class="fab fa-xbox"></i>
                                </div>
                                <a href="{{ route('admin.dependencias.index') }}" class="small-box-footer">Ver Todo
                                    <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-pink">
                                <div class="inner">
                                    <h3>{{ $areas }}</h3>
                                    <p>Areas</p>
                                </div>
                                <div class="icon">
                                    <i class="fab fa-playstation"></i>
                                </div>
                                <a href="{{ route('admin.areas.index') }}" class="small-box-footer">Ver Todo <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="row">
                    <section class="col-lg-12 connectedSortable">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-chart-pie mr-1"></i>
                                    Inventario
                                </h3>
                                @can('planadquisiciones.export')
                                    <div class="card-tools">
                                        <ul class="nav nav-pills ml-auto">
                                            <li class="nav-item">
                                                <a class="btn btn-success" href="{{ route('planadquisiciones.export') }}">
                                                    <i class="far fa-file-excel"></i> Exportar Todo</a>
                                            </li>
                                        </ul>
                                    </div>
                                @endcan
                            </div>

                            <figure class="highcharts-figure">
                                <div id="container"></div>
                            </figure>
                            <figure class="highcharts-figure">
                                <div id="containerUserSeries"></div>
                            </figure>
                            <figure class="highcharts-figure">
                                <div id="containerTime"></div>
                            </figure>
                            <div class="card-body">
                                <canvas id="planes"></canvas>
                            </div>
                            {{-- <figure class="highcharts-figure">
                                <div id="containerLabel"></div>
                            </figure> --}}
                        </div>
                    </section>
                </div>
            </div>
        </div>

    @endsection
    @section('script')
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/timeline.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <script>
            Highcharts.chart('containerTime', {
                chart: {
                    type: 'timeline'
                },
                credits: false,
                accessibility: {
                    screenReaderSection: {
                        beforeChartFormat: '<h5>{chartTitle}</h5>' +
                            '<div>{typeDescription}</div>' +
                            '<div>{chartSubtitle}</div>' +
                            '<div>{chartLongdesc}</div>' +
                            '<div>{viewTableButton}</div>'
                    },
                    point: {
                        valueDescriptionFormat: '{index}. {point.name}. {point.description}.'
                    }
                },
                xAxis: {
                    visible: false
                },
                yAxis: {
                    visible: false
                },
                title: {
                    text: '<br>Linea de tiempo</br> Inventario Documental Alcaldia Municipal'
                },
                subtitle: {
                    text: 'Mas Información: <a href="https://www.puertoboyaca-boyaca.gov.co">https://www.puertoboyaca-boyaca.gov.co</a>'
                },
                colors: [
                    '#4185F3',
                    '#427CDD',
                    '#406AB2',
                    '#3E5A8E',
                    '#3B4A68',
                    '#363C46'
                ],
                series: [{
                    data: [<?php foreach ($adquisiciones3 as $adq) { ?> {
                            name: '<?php echo $adq->anyo; ?>',
                            description: 'Total Carpetas: ' + <?php echo $adq->adq; ?>
                        },
                        <?php } ?>
                    ]

                }]
            });
        </script>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        @if (auth()->user()->hasRole('Admin'))
            <script>
                // var planadquisiciones = <?php echo json_encode($adquisiciones); ?>;
                // Data retrieved from https://netmarketshare.com
                Highcharts.chart('container', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    credits: false,
                    title: {
                        text: 'Registros por Oficina Productora',
                        align: 'left'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f}%',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },

                    series: [{
                        type: 'pie',
                        name: 'Carpetas',
                        colorByPoint: true,
                        data: [<?php foreach ($adquisiciones as $adq) { ?> {
                                name: '<?php echo $adq->area_name; ?>',
                                y: <?php echo $adq->adq; ?>
                            },
                            <?php } ?>
                        ]

                    }]
                });
            </script>
        @endif
        <script>
            // var planadquisiciones = <?php echo json_encode($adquisicionesSeries); ?>;
            // Data retrieved from https://netmarketshare.com
            Highcharts.chart('containerUserSeries', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                credits: false,
                title: {
                    text: 'Registros por Serie Documental',
                    align: 'left'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f}%',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },

                series: [{
                    type: 'pie',
                    name: 'Series',
                    colorByPoint: true,
                    data: [<?php foreach ($adquisicionesSeries as $adq) { ?> {
                            name: '<?php echo $adq->serie_name; ?>',
                            y: <?php echo $adq->adq; ?>
                        },
                        <?php } ?>
                    ]

                }]
            });
        </script>


        <script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>

        <script>
            $(function() {
                var varCompra = document.getElementById('planes').getContext('2d');

                var charCompra = new Chart(varCompra, {
                    type: 'line',
                    data: {
                        labels: [<?php foreach ($planes as $reg) {
                            setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish');
                            $mes_traducido = strftime('%B', strtotime($reg->mes));
                        
                            echo '"' . $mes_traducido . '",';
                        } ?>],
                        datasets: [{
                            label: 'Total del mes',
                            data: [<?php foreach ($planes as $reg) {
                                echo '' . $reg->totalmes . ',';
                            } ?>],

                            backgroundColor: '#E91E63',
                            borderColor: '#E91E63',

                            borderWidth: 3
                        }]
                    },

                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {

                                    beginAtZero: true
                                }
                            }]
                        },
                        legend: {
                            display: false
                        },
                        elements: {
                            point: {
                                radius: 5
                            }
                        }
                    }
                });
            });
        </script>
    @endsection
