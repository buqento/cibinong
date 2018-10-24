<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
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
<body class="bg-darkblue">

  <aside class="nav-aside">
    <div class="logo">
      <a href="index.html">
        <img src="images/logo.svg" alt="Logo SDP">
      </a>
    </div>
    <ul class="list-unstyled list">
      <li><a href="index.php"><i class="material-icons">assessment</i>Dashboard</a></li>
      <li class="aside-dropdown active">
        <a href="#"><i class="material-icons">assignment_turned_in</i>Kegiatan <i class="material-icons float-right m-0">keyboard_arrow_down</i></a>
        <ol class="list-unstyled aside-dropdown-menu">
          <li><a href="?r=kegiatan">Daftar Kegiatan</a></li>
          <li><a href="?r=kegiatan/create">Tambah Data</a></li>
        </ol>
      </li>
      <li class="aside-dropdown">
        <a href="#"><i class="material-icons">camera_enhance</i>Kamera <i class="material-icons float-right m-0">keyboard_arrow_down</i></a>
        <ol class="list-unstyled aside-dropdown-menu">
          <li><a href="?r=kamera">Daftar Kamera</a></li>
          <li><a href="?r=kamera/create">Tambah Data</a></li>
        </ol>
      </li>
      <li><a href="?r=absensi"><i class="material-icons">collections_bookmark</i>Absensi</a></li>
      <li><a href="?r=alarm"><i class="material-icons">alarm</i>Alarm</a></li>
    </ul>
  </aside>

	<nav class="nav nav-app">
		<div class="mr-auto">
      <!-- show in mobile view -->
			<div class="item toggle-aside">
				<a href="#"><i class="material-icons">menu</i></a>
			</div>
			<div class="item logo-mobile">
        <a href="index.html"><img src="images/logo.svg" alt="Logo SDP"></a>
			</div>
      <!-- end show in mobile view -->
      
			<div class="item app-icon">
				<i class="material-icons">apps</i>
			</div>
			<div class="item">
				<div class="title">Lapas Cibinong</div>
			</div>
			<div class="item help">
				<a href="" title="Bantuan"><i class="material-icons">help_outline</i></a>
			</div>
		</div>
		<div class="ml-auto">
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
		</div>
  </nav>
  
  <section class="content">

    <div class="status">
      <div class="back">
        <a href="remisi-daftar-usulan.html"><i class="material-icons">arrow_back</i></a>
        Kembali
      </div>
    </div>

    
    <div class="data">

      <div class="row data-header">
        <div class="col-md-12">
          <h1>Detail</h1>
        </div>
      </div>

      <div class="data-content">

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'nama',
                'waktu_mulai',
                'waktu_selesai',
                'kamera',
                'behavior',
                'lokasi',
                'peserta',
                'created_at',
            ],
        ]) ?>

      </div>
    </div>

  </section>

  
	<!-- inject:js -->
	<script src="js/bundle.js"></script>
	<!-- endinject -->
</body>
</html>