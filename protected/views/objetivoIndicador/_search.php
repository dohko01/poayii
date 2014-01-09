<?php
/* @var $this ObjetivoIndicadorController */
/* @var $model ObjetivoIndicador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'medio_verificacion'); ?>
		<?php echo $form->textField($model,'medio_verificacion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supuestos'); ?>
		<?php echo $form->textField($model,'supuestos',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_programa_presupuestal'); ?>
		<?php echo $form->textField($model,'id_programa_presupuestal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_objetivo'); ?>
		<?php echo $form->textField($model,'id_objetivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_ambito'); ?>
		<?php echo $form->textField($model,'id_ambito'); ?>
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