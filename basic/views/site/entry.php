<?php
/**
 * Created by PhpStorm.
 * User: zhuchen
 * Date: 16/7/20
 * Time: 下午4:45
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin();?>
    <?= $form->field($model,'name') ?>
    <?= $form->field($model,'email') ?>
    <div class="form-group">
        <?= Html::submitButton('Submit',['class' => 'btn btn-primary']); ?>
    </div>
<?php ActiveForm::end(); ?>

