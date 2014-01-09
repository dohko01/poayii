<?php
/* @var $this ObjetivoIndicadorController */
/* @var $model ObjetivoIndicador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'objetivo-indicador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'medio_verificacion'); ?>
		<?php echo $form->textField($model,'medio_verificacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'medio_verificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supuestos'); ?>
		<?php echo $form->textField($model,'supuestos',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'supuestos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_programa_presupuestal'); ?>
		<?php echo $form->textField($model,'id_programa_presupuestal'); ?>
		<?php echo $form->error($model,'id_programa_presupuestal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_objetivo'); ?>
		<?php echo $form->textField($model,'id_objetivo'); ?>
		<?php echo $form->error($model,'id_objetivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_ambito'); ?>
		<?php echo $form->textField($model,'id_ambito'); ?>
		<?php echo $form->error($model,'id_ambito'); ?>
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