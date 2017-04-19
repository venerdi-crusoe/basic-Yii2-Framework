<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
    <h3>Inserisci i tuoi dati</h3>

    <?php
			$form = ActiveForm::begin();
			echo $form->field($model, 'name');
			echo $form->field($model, 'email');
		?>
			<div class="form-group">
		<?php
			echo Html::submitButton('Submit',['class'=> 'btn btn-prymary']);
			$form = ActiveForm::end();
		?>
			</div>
