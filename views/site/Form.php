<?php
namespace app\models;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form */
/* @var $form ActiveForm */
?>
<div class="Form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'surname') ?>
        <?= $form->field($model, 'score') ?>
        <?= $form->field($model, 'description')->textarea() ?>

        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Form -->
