<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\excel\Excelexchanger;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UschhSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uschhs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uschh-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Uschh', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    ExcelExchanger::widget([
        'mainModelName' => $searchModel::className(), // here place model class name
    ]);
    ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'login',
            'password',
            'email:email',
            'Familia',
            'Name',
            'Othestvo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
