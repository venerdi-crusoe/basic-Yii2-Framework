<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();

echo $form->field ($model, 'code' );
echo $form->field ($model, 'name');
echo $form->field ($model, 'population');

?>

<div class="form-group">
<?= Html::submitButton($model->isNewRecord ? 'Create':'Update',
 ['class'=> $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
