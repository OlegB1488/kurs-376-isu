<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Uschh */

$this->title = 'Create Uschh';
$this->params['breadcrumbs'][] = ['label' => 'Uschhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uschh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
