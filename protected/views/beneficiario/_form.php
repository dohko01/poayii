<?php
/* @var $this BeneficiarioController */
/* @var $model Beneficiario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'beneficiario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'total'); ?>
		<?php echo $form->textField($model,'total'); ?>
		<?php echo $form->error($model,'total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero'); ?>
		<?php echo $form->textField($model,'genero'); ?>
		<?php echo $form->error($model,'genero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'urbano'); ?>
		<?php echo $form->textField($model,'urbano'); ?>
		<?php echo $form->error($model,'urbano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rural'); ?>
		<?php echo $form->textField($model,'rural'); ?>
		<?php echo $form->error($model,'rural'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mestizo'); ?>
		<?php echo $form->textField($model,'mestizo'); ?>
		<?php echo $form->error($model,'mestizo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indigena'); ?>
		<?php echo $form->textField($model,'indigena'); ?>
		<?php echo $form->error($model,'indigena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inmigrante'); ?>
		<?php echo $form->textField($model,'inmigrante'); ?>
		<?php echo $form->error($model,'inmigrante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otros'); ?>
		<?php echo $form->textField($model,'otros'); ?>
		<?php echo $form->error($model,'otros'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marginacion_muy_alta'); ?>
		<?php echo $form->textField($model,'marginacion_muy_alta'); ?>
		<?php echo $form->error($model,'marginacion_muy_alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marginacion_alta'); ?>
		<?php echo $form->textField($model,'marginacion_alta'); ?>
		<?php echo $form->error($model,'marginacion_alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marginacion_media'); ?>
		<?php echo $form->textField($model,'marginacion_media'); ?>
		<?php echo $form->error($model,'marginacion_media'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marginacion_baja'); ?>
		<?php echo $form->textField($model,'marginacion_baja'); ?>
		<?php echo $form->error($model,'marginacion_baja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marginacion_muy_baja'); ?>
		<?php echo $form->textField($model,'marginacion_muy_baja'); ?>
		<?php echo $form->error($model,'marginacion_muy_baja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_proyecto_institucional'); ?>
		<?php echo $form->textField($model,'id_proyecto_institucional'); ?>
		<?php echo $form->error($model,'id_proyecto_institucional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_unidad_beneficiario'); ?>
		<?php echo $form->textField($model,'id_unidad_beneficiario'); ?>
		<?php echo $form->error($model,'id_unidad_beneficiario'); ?>
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