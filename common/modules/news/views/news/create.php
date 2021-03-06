<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\news\models\News */

$this->title = Yii::t('ML', 'Create {modelClass}', [
	'modelClass' => Yii::t('ML','News')
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('ML', 'News'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
