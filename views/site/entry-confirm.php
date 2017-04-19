<?php
	use yii\helpers\Html;
?>
<h3>Hai inserito</h3>
<ul>
	<li>Nome: <?= Html::encode($model->name) ?></li>
	<li>Email: <?= Html::encode($model->email) ?></li>
</ul>
