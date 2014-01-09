<?php
/* @var $this ProyectoInstitucionalController */
/* @var $model ProyectoInstitucional */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nombre_tecnico'); ?>
		<?php echo $form->textField($model,'nombre_tecnico',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_proyecto_estrategico'); ?>
		<?php echo $form->textField($model,'numero_proyecto_estrategico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lider_proyecto'); ?>
		<?php echo $form->textField($model,'lider_proyecto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jefe_inmediato'); ?>
		<?php echo $form->textField($model,'jefe_inmediato',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jefe_planeacion'); ?>
		<?php echo $form->textField($model,'jefe_planeacion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coordinador_grupo_estrategico'); ?>
		<?php echo $form->textField($model,'coordinador_grupo_estrategico',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_actividad_institucional'); ?>
		<?php echo $form->textField($model,'id_actividad_institucional'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sub_subfuncion'); ?>
		<?php echo $form->textField($model,'id_sub_subfuncion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_programa_especial'); ?>
		<?php echo $form->textField($model,'id_programa_especial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_programa_sectorial'); ?>
		<?php echo $form->textField($model,'id_programa_sectorial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_unidad'); ?>
		<?php echo $form->textField($model,'id_unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_programa_presupuestario'); ?>
		<?php echo $form->textField($model,'id_programa_presupuestario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_proyecto_estrategico'); ?>
		<?php echo $form->textField($model,'id_proyecto_estrategico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_politica_publica'); ?>
		<?php echo $form->textField($model,'id_politica_publica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_proyecto_tipo'); ?>
		<?php echo $form->textField($model,'id_proyecto_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_accion'); ?>
		<?php echo $form->textField($model,'id_tipo_accion'); ?>
	</div>

	<div class="row buttons">
		<?php 
        $this->widget('zii.widgets.jui.CJuiButton',array(
            'buttonType'=>'submit',
            'name'=>'btnBuscar',
            'value'=>'1',
            'caption'=>'Buscar',
            )
        );
        ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->