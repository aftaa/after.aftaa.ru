<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LinkView */

$this->title = Yii::t('app', 'Create Link View');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Link Views'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="link-view-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
