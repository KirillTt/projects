<?php



use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;


use yii\helpers\ArrayHelper;
use common\modules\news\models\Authors;
use common\modules\news\assets\AuthorsAsset;
AuthorsAsset::register($this);

/* @var $this yii\web\View */
/* @var $model common\modules\news\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class' => 'model-form']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->dropDownList(ArrayHelper::map(Authors::find()->all(), 'id', 'name')) ?>

    <button type="button" class="btn btn-success" onclick="addAuthor()">Добавить автора</button>


    <?= $form->field($model, 'time')->widget(DateTimePicker::className(),[
    'name' => 'dp_1',
    'type' => DateTimePicker::TYPE_INPUT,
    'options'=> ['placeholder'=>'Ввод даты/времени...'],
    'value' => '23-Feb-1982 10:10',
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'dd-M-yyyy hh:ii'
    ]
]);?>

    <?= $form->field($model, 'image')->fileinput() ?>


    <?= $form->field($model, 'short')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(\common\components\widgets\Redactor::className())?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('ML', $model->isNewRecord ? 'Create' : 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
