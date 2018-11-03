<?php
use dosamigos\chartjs\ChartJs;
?>
<?= ChartJs::widget([
    'type' => 'line',
    'options' => [
        'height' => 227,
        'width' => 400
    ],
    'data' => [
        'labels' => $labelBulan,
        'datasets' => [
            [
                'label' => "Upacara",
                // 'backgroundColor' => "rgba(179,181,198,0.2)",
                'borderColor' => "#007bff",
                'pointBackgroundColor' => "rgba(179,181,198,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(179,181,198,1)",
                'data' => $dataSummaryUpacara
            ],
            [
                'label' => "Apel Pagi",
                // 'backgroundColor' => "rgba(255,99,132,0.2)",
                'borderColor' => "#dc3545",
                'pointBackgroundColor' => "rgba(255,99,132,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(255,99,132,1)",
                'data' => $dataSummaryApel
            ],
            [
                'label' => "Shalat Berjamaah",
                // 'backgroundColor' => "#7FB3D5",
                'borderColor' => "#28a745",
                'pointBackgroundColor' => "rgba(255,99,132,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(255,99,132,1)",
                'data' => $dataSummaryShalat
            ]
        ]
    ]
]);
?>