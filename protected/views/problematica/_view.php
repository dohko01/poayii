<?php
/* @var $this ProblematicaController */
/* @var $data Problematica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_problematica')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_problematica), array('view', 'id'=>$data->id_problematica)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_arbol_problematica')); ?>:</b>
	<?php echo CHtml::encode($data->id_arbol_problematica); ?>
	<br />


</div>