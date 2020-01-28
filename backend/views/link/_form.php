<?php

use common\models\LinkBlock;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Link */
/* @var $form yii\widgets\ActiveForm */

$linkBlocks = LinkBlock::find()->select(['name', 'id'])->indexBy('id')->column();
$private = [
    false => Yii::t('app', 'Yes'),
    true  => Yii::t('app','No'),
];
?>

<div class="link-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'link_block_id')->dropdownList($linkBlocks, [
            'prompt' => Yii::t('app', 'Select Block')
    ]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'href')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'private')->dropDownList($private) ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
