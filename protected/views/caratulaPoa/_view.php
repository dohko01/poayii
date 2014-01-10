<?php
/* @var $this CaratulaPoaController */
/* @var $data CaratulaPoa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_caratula_poa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_caratula_poa), array('view', 'id'=>$data->id_caratula_poa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_programa_presupuestario')); ?>:</b>
	<?php echo CHtml::encode($data->id_programa_presupuestario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_unidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_politica_publica')); ?>:</b>
	<?php echo CHtml::encode($data->id_politica_publica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_programa_sectorial')); ?>:</b>
	<?php echo CHtml::encode($data->id_programa_sectorial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />


</div>