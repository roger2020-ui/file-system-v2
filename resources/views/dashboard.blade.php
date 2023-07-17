@extends('partials.app')
@section('content')
    <div id="content-wrapper" class="d-flex flex-column gradient-custom-3">

        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav
                class="navbar navbar-expand navbar-light bg-white topbar mb-3 static-top shadow d-flex justify-content-end ">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="h-50 d-flex justify-content-end">
                    <x-app-layout>
                    </x-app-layout>
                </div>
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">


                <div class="row">
                    <!-- Pie Chart -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">PRIORITY SECTORS</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="myPieChart" width="315" height="220"
                                        style="display: block; height: 245px; width: 351px;"
                                        class="chartjs-render-monitor"></canvas>
                                </div>
                                <div class="mt-4 text-center small">
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-primary"></i> SETUP
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-success"></i> GIA
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-info"></i> OTHERS
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExample" data-slide-to="1"></li>
                                <li data-target="#carouselExample" data-slide-to="2"></li>
                                <li data-target="#carouselExample" data-slide-to="3"></li>
                                <li data-target="#carouselExample" data-slide-to="4"></li>
                                <li data-target="#carouselExample" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/img/dost.png" width="450px" class="d-block mx-auto" alt="Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/dost1.jpg" width="450px" class="d-block mx-auto" alt="Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/dost2.jpg" width="450px" class="d-block mx-auto" alt="Image 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/dost3.jpg" width="450px" class="d-block mx-auto" alt="Image 4">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/dost4.jpg" width="450px" class="d-block mx-auto" alt="Image 5">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/dost5.jpg" width="450px" class="d-block mx-auto" alt="Image 6">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Main Content -->
    </div>
@endsection
