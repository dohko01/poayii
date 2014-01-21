<?php
/* @var $this ObjetivoIndicadorController */
/* @var $data ObjetivoIndicador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_objetivo_indicador')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_objetivo_indicador), array('view', 'id'=>$data->id_objetivo_indicador)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medio_verificacion')); ?>:</b>
	<?php echo CHtml::encode($data->medio_verificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supuestos')); ?>:</b>
	<?php echo CHtml::encode($data->supuestos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_programa_presupuestal')); ?>:</b>
	<?php echo CHtml::encode($data->id_programa_presupuestal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_objetivo')); ?>:</b>
	<?php echo CHtml::encode($data->id_objetivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ambito')); ?>:</b>
	<?php echo CHtml::encode($data->id_ambito); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('objetivo')); ?>:</b>
	<?php echo CHtml::encode($data->objetivo); ?>
	<br />

	*/ ?>

</div>