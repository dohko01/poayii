<?php
/* @var $this BeneficiarioController */
/* @var $data Beneficiario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_beneficiario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_beneficiario), array('view', 'id'=>$data->id_beneficiario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($data->genero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('urbano')); ?>:</b>
	<?php echo CHtml::encode($data->urbano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rural')); ?>:</b>
	<?php echo CHtml::encode($data->rural); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mestizo')); ?>:</b>
	<?php echo CHtml::encode($data->mestizo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indigena')); ?>:</b>
	<?php echo CHtml::encode($data->indigena); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('inmigrante')); ?>:</b>
	<?php echo CHtml::encode($data->inmigrante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros')); ?>:</b>
	<?php echo CHtml::encode($data->otros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marginacion_muy_alta')); ?>:</b>
	<?php echo CHtml::encode($data->marginacion_muy_alta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marginacion_alta')); ?>:</b>
	<?php echo CHtml::encode($data->marginacion_alta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marginacion_media')); ?>:</b>
	<?php echo CHtml::encode($data->marginacion_media); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marginacion_baja')); ?>:</b>
	<?php echo CHtml::encode($data->marginacion_baja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marginacion_muy_baja')); ?>:</b>
	<?php echo CHtml::encode($data->marginacion_muy_baja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proyecto_institucional')); ?>:</b>
	<?php echo CHtml::encode($data->id_proyecto_institucional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad_beneficiario')); ?>:</b>
	<?php echo CHtml::encode($data->id_unidad_beneficiario); ?>
	<br />

	*/ ?>

</div>