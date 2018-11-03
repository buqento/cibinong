<?php
use yii\helpers\Html;
// $this->registerAssetBundle('app');
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SDP - Lapas Cibinong</title>

	<!-- Material Icon -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- inject:css -->
  <link rel='stylesheet' type='text/css' href='<?php echo $this->theme->baseUrl; ?>/assets/app.css' title='wsite-theme-css' />
  <link rel='stylesheet' type='text/css' href='<?php echo $this->theme->baseUrl; ?>/assets/reset.css' title='wsite-theme-css' />
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
      <li class="aside-dropdown <?php if($this->title == 'Kegiatan') {echo 'active';} ?>">
        <a href="#"><i class="material-icons">assignment_turned_in</i>Kegiatan <i class="material-icons float-right m-0">keyboard_arrow_down</i></a>
        <ol class="list-unstyled aside-dropdown-menu">
          <li><a href="?r=kegiatan">Daftar Kegiatan</a></li>
          <li><a href="?r=kegiatan/create">Tambah Data</a></li>
        </ol>
      </li>
      <li class="aside-dropdown <?php if($this->title == 'Kamera') {echo 'active';} ?>">
        <a href="#"><i class="material-icons">camera_enhance</i>Kamera <i class="material-icons float-right m-0">keyboard_arrow_down</i></a>
        <ol class="list-unstyled aside-dropdown-menu">
          <li><a href="?r=kamera">Daftar Kamera</a></li>
          <li><a href="?r=kamera/create">Tambah Data</a></li>
        </ol>
      </li>

      <li <?php if($this->title == 'Absensi') {echo 'class="active"';} ?>>
      <?= Html::a('<i class="material-icons">collections_bookmark</i> Absensi', ['/absensi'] ) ?>
      </li>

      <li <?php if($this->title == 'Alarm') {echo 'class="active"';} ?>>
      <?= Html::a('<i class="material-icons">notification_important</i> Alarm', ['/alarm'] ) ?>
      </li>

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
      
<!-- 			<div class="item app-icon">
				<i class="material-icons">apps</i>
			</div> -->
			<div class="item">
				<div class="title">Lapas Cibinong</div>
			</div>
<!-- 			<div class="item help">
				<a href="" title="Bantuan"><i class="material-icons">help_outline</i></a>
			</div> -->
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
  

    <?php $this->beginBody() ?>

    <section class="content">
        
        <div class="data">

        <div class="row data-header">
            <div class="col-md-12">
            <h1><?= Html::encode($this->title) ?></h1>
            </div>
        </div>

        <div class="data-content">

            <?= $content ?>


        </div>
        </div>

    </section>


    <?php $this->endBody() ?>

	<!-- inject:js -->
	<script src="js/bundle.js"></script>
	<!-- endinject -->
</body>
</html>

<?php $this->endPage() ?>