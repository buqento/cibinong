<?php
use yii\helpers\Html;
?>

  <section class="content">
    <div class="data">
      <div class="container-fluid">
      
        <div class="row">

          <div class="col-md-8">
            <?= $this->render('_months', [
										'labelBulan' => $labelBulan,
										'dataSummaryUpacara' => $dataSummaryUpacara,
										'dataSummaryApel' => $dataSummaryApel,
										'dataSummaryShalat' => $dataSummaryShalat
                ])
            ?>
          </div>

          <div class="col-md-4">
              <?= $this->render('_top', ['dataProvider' => $dataProvider]) ?>
          </div>

        </div>
        <br>
        <br>
        <br>

        <div class="row">
            <?= $this->render('_absensi', [
                    'labelKehadiran' => $labelKehadiran,
										'dataKehadiranUpacara' => $dataKehadiranUpacara,
										'dataKehadiranApel' => $dataKehadiranApel,
										'dataKehadiranshalat' => $dataKehadiranshalat,
                ])
            ?>

        </div>

  </section>