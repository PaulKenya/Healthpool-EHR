@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="card-body text-center">
                            <h3 class="text-primary">CANCER REGISTRY DATA ANALYTICS</h3>
        </div>
    </div>

    <div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">CASES BAR CHART</h4>
            </div>
            <div class="card-body">
                <canvas id="bar-chart" width="800" height="450"></canvas>
            </div>
        </div>
    </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">CASES PIE CHART</h4>
                </div>
                <div class="card-body">
                    {{--<script type="text/javascript">--}}
                        {{--$(function () {--}}
                            {{--new Chart(document.getElementById("pie-chart"), {--}}
                                {{--type: 'pie',--}}
                                {{--data: {--}}
                                    {{--labels: ["Pharmacy", "Insurance", "Patients Admission", "Others"],--}}
                                    {{--datasets: [{--}}
                                        {{--label: "Sales",--}}
                                        {{--backgroundColor: ["#36a2eb", "#ff6384","#4bc0c0","#ffcd56","#07b107"],--}}
                                        {{--data: [2478000,5267000,3734000,2784000]--}}
                                    {{--}]--}}
                                {{--},--}}
                                {{--options: {--}}
                                    {{--title: {--}}
                                        {{--display: true,--}}
                                        {{--text: 'Sales'--}}
                                    {{--}--}}
                                {{--}--}}
                            {{--});--}}
                        {{--});--}}
                    {{--</script>--}}
                    <canvas id="pie-chart" width="800" height="450"></canvas>
                </div>
            </div>
        </div>
    </div>



<!--    --><?php
//    $line = array(array('user', 12), array('admin', 3), array('user2', 1), array('user3', 1));
//
//    $pc = new C_PhpChartX(array($line),'user_chart');
//    $pc->add_plugins(array('canvasTextRenderer'));
//    //set series
//    $pc->add_series(array('renderer'=>'plugin::BarRenderer'));
//    //set axes
//    $pc->set_axes(array(
//        'xaxis'  => array(
//            'renderer'=>'plugin::CategoryAxisRenderer',
//            'tickRenderer'=>'plugin::CanvasAxisTickRenderer'),
//        'yaxis'  => array(
//            'autoscale'=>true,
//            'tickRenderer'=>'plugin::CanvasAxisTickRenderer')
//    ));
//
//    $pc->draw(800,500);
//    ?>

@endsection