<?php
/* @var $this ProgramaPresupuestalController */
/* @var $model ProgramaPresupuestal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nombre_responsable_unidad'); ?>
		<?php echo $form->textField($model,'nombre_responsable_unidad',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_responsable_unidad'); ?>
		<?php echo $form->textField($model,'email_responsable_unidad',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_responsable_unidad'); ?>
		<?php echo $form->textField($model,'telefono_responsable_unidad',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio_inicio'); ?>
		<?php echo $form->textField($model,'anio_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio_termino'); ?>
		<?php echo $form->textField($model,'anio_termino'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resultados_esperados'); ?>
		<?php echo $form->textArea($model,'resultados_esperados',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'justificacion'); ?>
		<?php echo $form->textArea($model,'justificacion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cuantificacion_area_enfoque_potencial'); ?>
		<?php echo $form->textField($model,'cuantificacion_area_enfoque_potencial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area_enfoque_objetivo'); ?>
		<?php echo $form->textArea($model,'area_enfoque_objetivo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cuantificacion_area_enfoque_objetivo'); ?>
		<?php echo $form->textField($model,'cuantificacion_area_enfoque_objetivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area_enfoque_potencial'); ?>
		<?php echo $form->textArea($model,'area_enfoque_potencial',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_programa_presupuestario'); ?>
		<?php echo $form->textField($model,'id_programa_presupuestario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_unidad'); ?>
		<?php echo $form->textField($model,'id_unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_politica_publica'); ?>
		<?php echo $form->textField($model,'id_politica_publica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_programa_sectorial'); ?>
		<?php echo $form->textField($model,'id_programa_sectorial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_objetivo_pnd'); ?>
		<?php echo $form->textField($model,'id_objetivo_pnd'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_objetivo_milenio'); ?>
		<?php echo $form->textField($model,'id_objetivo_milenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_modalidad'); ?>
		<?php echo $form->textField($model,'id_modalidad'); ?>
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