<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 4/1/2018
 * Time: 11:55 PM
 */?>
@extends('adminlte::page')
@section('content')
    <div class="row"  style="width:100%;background-color:#ffffff;">
        <div>
            <div  class="col-md-12" >
                <section>
                        <div class="col-md-6">
                            <div class="panel panel-success">
                                <div class="panel-heading">Store Report By Month</div>
                                <div class="panel-body">
                                    <div class="chart">
                                        <canvas id="chart-bar" height="310" width="600"></canvas>
                                    </div>
                                    <div id="legendDiv"></div>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Count store results group by store name </div>
                            <div class="panel-body">
                                <table class="table" height="100" width="600">
                                    <tr>
                                        <th>No.</th>
                                        <th>Count store</th>
                                        <th>Store Name</th>
                                    </tr>
                                    <?php $i = 1; ?>
                                    @foreach($getstorechart as $value)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$value->count}}</td>
                                            <td>{{$value->store_name}} users</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- ./col -->
        </div>
    </div>
    {!! Html::script('js/Chart.min.js') !!}
<script>
    window.onload = function(){
        // Bar Chart from barChartData
        var ctx = document.getElementById("chart-bar").getContext("2d");
        window.myBar = new Chart(ctx).Bar(barChartData, {
            responsive : true
        });
    }
    var barChartData = {
        labels: [
            <?php
              foreach($getstorechart as $key)
              {
                echo '"'.$key->count.'"'.",";
              }
             ?>
            ],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                highlightStroke: "rgba(220,220,220,1)",
                data: [
                    <?php
                      foreach ($getstorechart as $value) {
                        echo $value->count.",";
                      }
                     ?>
                    ]
            }
        ]
    }
</script>
@endsection