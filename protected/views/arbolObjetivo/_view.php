<?php
/* @var $this ArbolObjetivoController */
/* @var $data ArbolObjetivo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_arbol_objetivo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_arbol_objetivo), array('view', 'id'=>$data->id_arbol_objetivo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('definicion_objetivo')); ?>:</b>
	<?php echo CHtml::encode($data->definicion_objetivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_programa_presupuestal')); ?>:</b>
	<?php echo CHtml::encode($data->id_programa_presupuestal); ?>
	<br />


</div>