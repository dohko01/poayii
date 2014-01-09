<?php
/* @var $this IndicadorController */
/* @var $data Indicador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_indicador')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_indicador), array('view', 'id'=>$data->id_indicador)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_objetivo')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_objetivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_indicador')); ?>:</b>
	<?php echo CHtml::encode($data->meta_indicador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tercer_trimestre')); ?>:</b>
	<?php echo CHtml::encode($data->tercer_trimestre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuarto_trimestre')); ?>:</b>
	<?php echo CHtml::encode($data->cuarto_trimestre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_trimestre')); ?>:</b>
	<?php echo CHtml::encode($data->primer_trimestre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_parent_indicador')); ?>:</b>
	<?php echo CHtml::encode($data->id_parent_indicador); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('anio_linea_base')); ?>:</b>
	<?php echo CHtml::encode($data->anio_linea_base); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_variable_denominador')); ?>:</b>
	<?php echo CHtml::encode($data->id_variable_denominador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_objetivo_indicador')); ?>:</b>
	<?php echo CHtml::encode($data->id_objetivo_indicador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('linea_base')); ?>:</b>
	<?php echo CHtml::encode($data->linea_base); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundo_trimestre')); ?>:</b>
	<?php echo CHtml::encode($data->segundo_trimestre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interpretacion')); ?>:</b>
	<?php echo CHtml::encode($data->interpretacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proyecto_institucional')); ?>:</b>
	<?php echo CHtml::encode($data->id_proyecto_institucional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad_medida')); ?>:</b>
	<?php echo CHtml::encode($data->id_unidad_medida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_formula_indicador')); ?>:</b>
	<?php echo CHtml::encode($data->id_formula_indicador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_indicador')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_indicador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_frecuencia')); ?>:</b>
	<?php echo CHtml::encode($data->id_frecuencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_comportamiento')); ?>:</b>
	<?php echo CHtml::encode($data->id_comportamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dimension_indicador')); ?>:</b>
	<?php echo CHtml::encode($data->id_dimension_indicador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_variable_numerador')); ?>:</b>
	<?php echo CHtml::encode($data->id_variable_numerador); ?>
	<br />

	*/ ?>

</div>