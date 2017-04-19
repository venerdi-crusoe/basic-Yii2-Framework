<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h3>Paesi</h3>
<?php echo Html::a( 'Crea una nuova Città', ['country/create'],['class' => 'btn btn-success'] );?>
<table width="50%">
<?php
foreach ($countries as $country){?>
    <tr>
        <td><?= Html::encode("{$country->name}");?><td>
        <td><a href="index.php?r=country/view&code=<?PHP echo $country->code;?>">
        <span class='glyphicon glyphicon-eye-open'></span></a>
        </td>
        <td>
        <a href="index.php?r=country/update&code=<?PHP echo $country->code;?>">
        <span class='glyphicon glyphicon-pencil'></span></a>
        </td>
        <td>
        <a href="javascript:void(0)"
         onclick="if(confirm('Vuoi veramente cancellare il record?'))
         {
           location.href='index.php?r=country/delete&code=<?PHP echo $country->code;?>'

         };"
         <span class='glyphicon glyphicon-trash'></span></a>
       </td>
    </tr>
<?php }?>
</table>
 <?= LinkPager::widget(['pagination' => $pagination]) ?>
