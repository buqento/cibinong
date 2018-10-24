<?php
use dosamigos\chartjs\ChartJs;
?>
<div class="row">

    <div class="col-lg-4">
        <h2>Upacara</h2>
        <?=
        ChartJs::widget([
            'type' => 'doughnut',
            'options' => ['height' => 100,'width' => 100],
            'data' => [
                'labels' => $labelKehadiran,
                'datasets' => [
                    [
                        'backgroundColor' => ['#28a745','#dc3545'],
                        'borderWidth' => 0,
                        'pointBackgroundColor' => "rgba(179,181,198,1)",
                        'pointBorderColor' => "#fff",
                        'pointHoverBackgroundColor' => "#fff",
                        'pointHoverBorderColor' => "rgba(179,181,198,1)",
                        'data' => $dataKehadiranUpacara
                    ],
                ]
            ]
        ]);
        ?>

    </div>

    <div class="col-lg-4">
        <h2>Apel Pagi</h2>
        <?=
        ChartJs::widget([
            'type' => 'doughnut',
            'options' => ['height' => 100,'width' => 100],
            'data' => [
                'labels' => $labelKehadiran,
                'datasets' => [
                    [
                        'backgroundColor' => ['#28a745','#dc3545'],
                        'borderWidth' => 0,
                        'pointBackgroundColor' => "rgba(179,181,198,1)",
                        'pointBorderColor' => "#fff",
                        'pointHoverBackgroundColor' => "#fff",
                        'pointHoverBorderColor' => "rgba(179,181,198,1)",
                        'data' => $dataKehadiranApel
                    ],
                ]
            ]
        ]);
        ?>
    </div>

    <div class="col-lg-4">
        <h2>Shalat Berjamaah</h2>
        <?=
        ChartJs::widget([
            'type' => 'doughnut',
            'options' => ['height' => 100,'width' => 100],
            'data' => [
                'labels' => $labelKehadiran,
                'datasets' => [
                    [
                        'backgroundColor' => ['#28a745','#dc3545'],
                        'borderWidth' => 0,
                        'pointBackgroundColor' => "rgba(179,181,198,1)",
                        'pointBorderColor' => "#fff",
                        'pointHoverBackgroundColor' => "#fff",
                        'pointHoverBorderColor' => "rgba(179,181,198,1)",
                        'data' => $dataKehadiranshalat
                    ],
                ]
            ]
        ]);
        ?>
    </div>

</div>