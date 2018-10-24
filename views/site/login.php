<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
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

	<div class="container login">
        <br><br>
		<div class="row">
			<div class="col-md-5 m-auto">
				<div class="logo-single">
					<a href="#">
						<img src="images/logo.svg" alt="Logo SDP">
					</a>
				</div>
				<div class="panel">
					<p><b class="color-blue">Masuk</b> ke akun Anda untuk mengelolah dan menjelajahi semua layanan.</p>
					<br>

                    <?php $form = ActiveForm::begin(); ?>
					<!-- Alert -->
					<!-- <div class="alert alert-danger"><i class="material-icons">cancel</i>Nama pengguna tidak ditemukan</div> -->
					<!-- <div class="alert alert-warning"><i class="material-icons">warning</i> -->
                        <?php // $form->errorSummary($model,['header'=>'', 'class' => 'alert alert-danger']) ?>
                    <!-- </div> -->
					<!-- End Alert -->
						<div class="form-group">
                            <?= $form->field($model, 'username')
                                ->textInput([
                                    'autofocus' => true,
                                    'class' => 'form-control',
                                    'placeholder' => 'Nama Pengguna'
                                    ]) ?>
						</div>
						<div class="form-group">
                            <?= $form->field($model, 'password')
                                ->passwordInput([
                                    'autofocus' => true,
                                    'class' => 'form-control',
                                    'placeholder' => 'Kata Sandi'
                                    ]) ?>
                        </div>

						<div class="form-group">
                            <?= Html::submitButton('Masuk', ['class' => 'btn btn-block btn-primary', 'name' => 'login-button']) ?>
						</div>

                    <?php ActiveForm::end(); ?>
				</div>
			</div>
		</div>
	</div>
	
	<!-- inject:js -->
	<script src="js/bundle.js"></script>
	<!-- endinject -->
</body>
</html>