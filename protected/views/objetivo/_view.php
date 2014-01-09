<?php
/* @var $this ObjetivoController */
/* @var $data Objetivo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_objetivo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_objetivo), array('view', 'id'=>$data->id_objetivo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_arbol_objetivo')); ?>:</b>
	<?php echo CHtml::encode($data->id_arbol_objetivo); ?>
	<br />


</div>