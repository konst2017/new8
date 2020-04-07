<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\frontend\models\Interview */
/* @var $form ActiveForm */
?>
<div class="site-Interview">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
 <?= $form->field($model,'sex')->radioList(['Мужчина','Женщина'])->label('Вы:') ?>

       <?= $form->field($model, 'planets')->checkboxList(
    ['Меркурий', 'Венера', 'Земля', 'Марс', 'Юпитер', 'Сатурн', 'Уран', 'Нептун']
)->label('Какие планеты по вашему мнению обитаемы?') ?>

      <?= $form->field($model, 'astronauts')->dropDownList(
    [
        'Юрий Гагарин',
        'Алексей Леонов',
        'Нил Армстронг',
        'Валентина Терешкова',
        'Эдвин Олдрин',
        'Анатолий Соловьев'
    ],
    ['size' => 6, 'multiple' => true]
)
->hint('С помощью Ctrl вы можете выбрать более одного космонавта')
->label('Какие космонавты вам известны?') ?>

      <?= $form->field($model, 'planet')->dropDownList(
    ['Меркурий', 'Венера', 'Земля', 'Марс', 'Юпитер', 'Сатурн', 'Уран', 'Нептун']
) ?>
<?= $form->field($model, 'verifyCode')->widget(
    yii\captcha\Captcha::className(),
    [
        'template' => '<div class="row"><div class="col-xs-3">{image}</div><div class="col-xs-4">{input}</div></div>',        
    ]
)->hint('Нажмите на картинку, чтобы обновить.') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-Interview -->
