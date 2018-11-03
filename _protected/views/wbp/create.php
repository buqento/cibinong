<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Wbp */

$this->title = 'Create Wbp';
$this->params['breadcrumbs'][] = ['label' => 'Wbps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wbp-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
