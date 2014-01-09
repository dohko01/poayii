<?php
/* @var $this ArbolProblemaController */
/* @var $model ArbolProblema */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'arbol-problema-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'definicion_problematica'); ?>
		<?php echo $form->textArea($model,'definicion_problematica',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'definicion_problematica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_programa_presupuestal'); ?>
		<?php echo $form->textField($model,'id_programa_presupuestal'); ?>
		<?php echo $form->error($model,'id_programa_presupuestal'); ?>
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