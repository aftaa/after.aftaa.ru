<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LinkView */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="link-view-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'link_id')->textInput() ?>

    <?= $form->field($model, 'date_time')->textInput() ?>

    <?= $form->field($model, 'ip4')->textInput() ?>

    <?= $form->field($model, 'is_guest')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
