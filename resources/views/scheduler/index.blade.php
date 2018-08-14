@extends('layouts.app') @section('content')
<div class="page">
    @include('layouts.navbar')
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        @include('layouts.sidebar')
        <div class="content-inner">
            <!-- Page Header-->
            <header class="page-header">
                <div class="container-fluid">
                    <h2 class="no-margin-bottom">Consultas</h2>
                </div>
            </header>
            <!-- Breadcrumb-->
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Consultas</h3>
                                </div>
                                <div class="card-body">
                                    <div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:600px;'>
                                        <div class="dhx_cal_navline">
                                            <div class="dhx_cal_prev_button">&nbsp;</div>
                                            <div class="dhx_cal_next_button">&nbsp;</div>
                                            <div class="dhx_cal_today_button"></div>
                                            <div class="dhx_cal_date"></div>
                                            <div class="dhx_cal_tab" name="day_tab" style="right:204px;"></div>
                                            <div class="dhx_cal_tab" name="week_tab" style="right:140px;"></div>
                                            <div class="dhx_cal_tab" name="month_tab" style="right:76px;"></div>
                                        </div>
                                        <div class="dhx_cal_header">
                                        </div>
                                        <div class="dhx_cal_data">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection @section('scripts')
<script>
    $(document).ready(function () {
        scheduler.config.xml_date = "%Y-%m-%d %H:%i";
        scheduler.init('scheduler_here', new Date(), "week");
        scheduler.load("{{route('scheduler.create')}}", "json");
    })
</script> @endsection