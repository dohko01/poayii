<?php
/* @var $this ProgramaPresupuestarioController */
/* @var $data ProgramaPresupuestario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_programa_presupuestario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_programa_presupuestario), array('view', 'id'=>$data->id_programa_presupuestario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clave')); ?>:</b>
	<?php echo CHtml::encode($data->clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>