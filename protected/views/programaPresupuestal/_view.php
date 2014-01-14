<?php
/* @var $this ProgramaPresupuestalController */
/* @var $data ProgramaPresupuestal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_programa_presupuestal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_programa_presupuestal), array('view', 'id'=>$data->id_programa_presupuestal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_responsable_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_responsable_unidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_responsable_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->email_responsable_unidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_responsable_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_responsable_unidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resultados_esperados')); ?>:</b>
	<?php echo CHtml::encode($data->resultados_esperados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('justificacion')); ?>:</b>
	<?php echo CHtml::encode($data->justificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuantificacion_area_enfoque_potencial')); ?>:</b>
	<?php echo CHtml::encode($data->cuantificacion_area_enfoque_potencial); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('area_enfoque_objetivo')); ?>:</b>
	<?php echo CHtml::encode($data->area_enfoque_objetivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuantificacion_area_enfoque_objetivo')); ?>:</b>
	<?php echo CHtml::encode($data->cuantificacion_area_enfoque_objetivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_enfoque_potencial')); ?>:</b>
	<?php echo CHtml::encode($data->area_enfoque_potencial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_objetivo_pnd')); ?>:</b>
	<?php echo CHtml::encode($data->id_objetivo_pnd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_objetivo_milenio')); ?>:</b>
	<?php echo CHtml::encode($data->id_objetivo_milenio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_modalidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_modalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_caratula_poa')); ?>:</b>
	<?php echo CHtml::encode($data->id_caratula_poa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->anio_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio_termino')); ?>:</b>
	<?php echo CHtml::encode($data->anio_termino); ?>
	<br />

	*/ ?>

</div>