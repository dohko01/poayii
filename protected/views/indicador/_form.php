<?php
/* @var $this IndicadorController */
/* @var $model Indicador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'indicador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_objetivo'); ?>
		<?php echo $form->textArea($model,'descripcion_objetivo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion_objetivo'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'id_variable_numerador'); ?>
		<?php echo $form->textField($model,'id_variable_numerador'); ?>
		<?php echo $form->error($model,'id_variable_numerador'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'id_variable_denominador'); ?>
		<?php echo $form->textField($model,'id_variable_denominador'); ?>
		<?php echo $form->error($model,'id_variable_denominador'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'id_formula_indicador'); ?>
		<?php echo $form->textField($model,'id_formula_indicador'); ?>
		<?php echo $form->error($model,'id_formula_indicador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_indicador'); ?>
		<?php echo $form->textField($model,'id_tipo_indicador'); ?>
		<?php echo $form->error($model,'id_tipo_indicador'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'id_unidad_medida'); ?>
		<?php echo $form->textField($model,'id_unidad_medida'); ?>
		<?php echo $form->error($model,'id_unidad_medida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interpretacion'); ?>
		<?php echo $form->textArea($model,'interpretacion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'interpretacion'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'id_comportamiento'); ?>
		<?php echo $form->textField($model,'id_comportamiento'); ?>
		<?php echo $form->error($model,'id_comportamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_dimension_indicador'); ?>
		<?php echo $form->textField($model,'id_dimension_indicador'); ?>
		<?php echo $form->error($model,'id_dimension_indicador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_frecuencia'); ?>
		<?php echo $form->textField($model,'id_frecuencia'); ?>
		<?php echo $form->error($model,'id_frecuencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linea_base'); ?>
		<?php echo $form->textField($model,'linea_base',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'linea_base'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio_linea_base'); ?>
		<?php echo $form->textField($model,'anio_linea_base'); ?>
		<?php echo $form->error($model,'anio_linea_base'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_indicador'); ?>
		<?php echo $form->textField($model,'meta_indicador'); ?>
		<?php echo $form->error($model,'meta_indicador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primer_trimestre'); ?>
		<?php echo $form->textField($model,'primer_trimestre'); ?>
		<?php echo $form->error($model,'primer_trimestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundo_trimestre'); ?>
		<?php echo $form->textField($model,'segundo_trimestre'); ?>
		<?php echo $form->error($model,'segundo_trimestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tercer_trimestre'); ?>
		<?php echo $form->textField($model,'tercer_trimestre'); ?>
		<?php echo $form->error($model,'tercer_trimestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuarto_trimestre'); ?>
		<?php echo $form->textField($model,'cuarto_trimestre'); ?>
		<?php echo $form->error($model,'cuarto_trimestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total'); ?>
		<?php echo $form->textField($model,'total'); ?>
		<?php echo $form->error($model,'total'); ?>
	</div>
<?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'id_parent_indicador'); ?>
		<?php echo $form->textField($model,'id_parent_indicador'); ?>
		<?php echo $form->error($model,'id_parent_indicador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_objetivo_indicador'); ?>
		<?php echo $form->textField($model,'id_objetivo_indicador'); ?>
		<?php echo $form->error($model,'id_objetivo_indicador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_proyecto_institucional'); ?>
		<?php echo $form->textField($model,'id_proyecto_institucional'); ?>
		<?php echo $form->error($model,'id_proyecto_institucional'); ?>
	</div>
*/?>
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