<?php
/* @var $this ProyectoInstitucionalController */
/* @var $model ProyectoInstitucional */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proyecto-institucional-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_tecnico'); ?>
		<?php echo $form->textField($model,'nombre_tecnico',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_tecnico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_proyecto_estrategico'); ?>
		<?php echo $form->textField($model,'numero_proyecto_estrategico'); ?>
		<?php echo $form->error($model,'numero_proyecto_estrategico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lider_proyecto'); ?>
		<?php echo $form->textField($model,'lider_proyecto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lider_proyecto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jefe_inmediato'); ?>
		<?php echo $form->textField($model,'jefe_inmediato',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'jefe_inmediato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jefe_planeacion'); ?>
		<?php echo $form->textField($model,'jefe_planeacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'jefe_planeacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coordinador_grupo_estrategico'); ?>
		<?php echo $form->textField($model,'coordinador_grupo_estrategico',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'coordinador_grupo_estrategico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_actividad_institucional'); ?>
		<?php echo $form->textField($model,'id_actividad_institucional'); ?>
		<?php echo $form->error($model,'id_actividad_institucional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sub_subfuncion'); ?>
		<?php echo $form->textField($model,'id_sub_subfuncion'); ?>
		<?php echo $form->error($model,'id_sub_subfuncion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_programa_especial'); ?>
		<?php echo $form->textField($model,'id_programa_especial'); ?>
		<?php echo $form->error($model,'id_programa_especial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_proyecto_estrategico'); ?>
		<?php echo $form->textField($model,'id_proyecto_estrategico'); ?>
		<?php echo $form->error($model,'id_proyecto_estrategico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_proyecto_tipo'); ?>
		<?php echo $form->textField($model,'id_proyecto_tipo'); ?>
		<?php echo $form->error($model,'id_proyecto_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_accion'); ?>
		<?php echo $form->textField($model,'id_tipo_accion'); ?>
		<?php echo $form->error($model,'id_tipo_accion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_caratula_poa'); ?>
		<?php echo $form->textField($model,'id_caratula_poa'); ?>
		<?php echo $form->error($model,'id_caratula_poa'); ?>
	</div>

	<div class="row buttons">
		<?php 
        $this->widget('zii.widgets.jui.CJuiButton',array(
            'buttonType'=>'submit',
            'name'=>'btnEnviarForm',
            'value'=>'1',
            'caption'=>($model->isNewRecord ? 'Guardar' : 'Actualizar'),
            )
        );
        ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->