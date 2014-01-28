<?php
/* @var $this ProyectoInstitucionalController */
/* @var $data ProyectoInstitucional */
?>

<div class="view well">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proyecto_institucional')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_proyecto_institucional), array('view', 'id'=>$data->id_proyecto_institucional)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tecnico')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tecnico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_proyecto_estrategico')); ?>:</b>
	<?php echo CHtml::encode($data->numero_proyecto_estrategico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lider_proyecto')); ?>:</b>
	<?php echo CHtml::encode($data->lider_proyecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jefe_inmediato')); ?>:</b>
	<?php echo CHtml::encode($data->jefe_inmediato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jefe_planeacion')); ?>:</b>
	<?php echo CHtml::encode($data->jefe_planeacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coordinador_grupo_estrategico')); ?>:</b>
	<?php echo CHtml::encode($data->coordinador_grupo_estrategico); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_actividad_institucional')); ?>:</b>
	<?php echo CHtml::encode($data->id_actividad_institucional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sub_subfuncion')); ?>:</b>
	<?php echo CHtml::encode($data->id_sub_subfuncion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_programa_especial')); ?>:</b>
	<?php echo CHtml::encode($data->id_programa_especial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proyecto_estrategico')); ?>:</b>
	<?php echo CHtml::encode($data->id_proyecto_estrategico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proyecto_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->id_proyecto_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_accion')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_accion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_caratula_poa')); ?>:</b>
	<?php echo CHtml::encode($data->id_caratula_poa); ?>
	<br />

	*/ ?>

</div>