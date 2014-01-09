<?php
/* @var $this IndicadorController */
/* @var $model Indicador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'descripcion_objetivo'); ?>
		<?php echo $form->textArea($model,'descripcion_objetivo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meta_indicador'); ?>
		<?php echo $form->textField($model,'meta_indicador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tercer_trimestre'); ?>
		<?php echo $form->textField($model,'tercer_trimestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cuarto_trimestre'); ?>
		<?php echo $form->textField($model,'cuarto_trimestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primer_trimestre'); ?>
		<?php echo $form->textField($model,'primer_trimestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_parent_indicador'); ?>
		<?php echo $form->textField($model,'id_parent_indicador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio_linea_base'); ?>
		<?php echo $form->textField($model,'anio_linea_base'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_variable_denominador'); ?>
		<?php echo $form->textField($model,'id_variable_denominador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total'); ?>
		<?php echo $form->textField($model,'total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_objetivo_indicador'); ?>
		<?php echo $form->textField($model,'id_objetivo_indicador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'linea_base'); ?>
		<?php echo $form->textField($model,'linea_base',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'segundo_trimestre'); ?>
		<?php echo $form->textField($model,'segundo_trimestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interpretacion'); ?>
		<?php echo $form->textArea($model,'interpretacion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_proyecto_institucional'); ?>
		<?php echo $form->textField($model,'id_proyecto_institucional'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_unidad_medida'); ?>
		<?php echo $form->textField($model,'id_unidad_medida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_formula_indicador'); ?>
		<?php echo $form->textField($model,'id_formula_indicador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_indicador'); ?>
		<?php echo $form->textField($model,'id_tipo_indicador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_frecuencia'); ?>
		<?php echo $form->textField($model,'id_frecuencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_comportamiento'); ?>
		<?php echo $form->textField($model,'id_comportamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_dimension_indicador'); ?>
		<?php echo $form->textField($model,'id_dimension_indicador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_variable_numerador'); ?>
		<?php echo $form->textField($model,'id_variable_numerador'); ?>
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