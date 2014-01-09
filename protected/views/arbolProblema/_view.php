<?php
/* @var $this ArbolProblemaController */
/* @var $data ArbolProblema */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_arbol_problematica')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_arbol_problematica), array('view', 'id'=>$data->id_arbol_problematica)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('definicion_problematica')); ?>:</b>
	<?php echo CHtml::encode($data->definicion_problematica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_programa_presupuestal')); ?>:</b>
	<?php echo CHtml::encode($data->id_programa_presupuestal); ?>
	<br />


</div>