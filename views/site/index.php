<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SDP</title>

	<!-- Material Icon -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- inject:css -->
	<link rel="stylesheet" href="css/app.css">
	<!-- endinject -->
</head>
<body class="bg-darkblue theme-red no-sidebar">

	<nav class="nav">
    
		<div class="mr-auto">
			<div class="item">
				<div class="logo"><img src="images/logo.svg" alt="Logo SDP"></div>
			</div>
			<div class="item">
				<div class="title">Lapas Cibinong</div>
			</div>
			<!-- <div class="item app-icon">
				<a href="" title="Bantuan"><i class="material-icons">apps</i></a>
			</div> -->
			<div class="item app-icon">
				<div class="dropdown">
					<a href="" id="user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="material-icons">apps</i>
					</a>
					<div class="dropdown-menu dropdown-menu-left" aria-labelledby="user-dropdown">
						<a class="dropdown-item" href="?r=kegiatan"><i class="material-icons">assignment_turned_in</i> Kegiatan</a>
						<a class="dropdown-item" href="?r=kamera"><i class="material-icons">camera_enhance</i> Kamera</a>
						<a class="dropdown-item" href="?r=absensi"><i class="material-icons">collections_bookmark</i> Absensi</a>
						<a class="dropdown-item" href="?r=alarm"><i class="material-icons">alarm</i> Alarm</a>
					</div>
				</div>
			</div>
    </div>


			<div class="dropdown">
				<a id="user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span><?= Yii::$app->user->identity->username ?></span>
					<i class="material-icons">arrow_drop_down</i>
					<div class="img" id="user-photo-thumb">
						<style>
							#user-photo-thumb {
								background-image: url(images/user-photo.jpg);
							}
						</style>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="user-dropdown">
					<?= Html::a('Keluar', ['/site/logout'], ['class' => 'dropdown-item', 'data-method' => 'post']) ?>
				</div>
			</div>
    </div>
    
	</nav>
  
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

        <div class="container">
            <?= $this->render('_absensi', [
                    'labelKehadiran' => $labelKehadiran,
										'dataKehadiranUpacara' => $dataKehadiranUpacara,
										'dataKehadiranApel' => $dataKehadiranApel,
										'dataKehadiranshalat' => $dataKehadiranshalat,
                ])
            ?>

        </div>

  </section>
  
	<!-- inject:js -->
	<script src="js/bundle.js"></script>
	<!-- endinject -->
</body>
</html>