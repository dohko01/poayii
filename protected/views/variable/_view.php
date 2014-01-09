<?php
/* @var $this VariableController */
/* @var $data Variable */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_variable')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_variable), array('view', 'id'=>$data->id_variable)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio')); ?>:</b>
	<?php echo CHtml::encode($data->anio); ?>
	<br />


</div>