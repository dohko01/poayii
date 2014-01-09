<?php
/* @var $this BeneficiarioController */
/* @var $model Beneficiario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'total'); ?>
		<?php echo $form->textField($model,'total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genero'); ?>
		<?php echo $form->textField($model,'genero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'urbano'); ?>
		<?php echo $form->textField($model,'urbano'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rural'); ?>
		<?php echo $form->textField($model,'rural'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mestizo'); ?>
		<?php echo $form->textField($model,'mestizo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indigena'); ?>
		<?php echo $form->textField($model,'indigena'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inmigrante'); ?>
		<?php echo $form->textField($model,'inmigrante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otros'); ?>
		<?php echo $form->textField($model,'otros'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marginacion_muy_alta'); ?>
		<?php echo $form->textField($model,'marginacion_muy_alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marginacion_alta'); ?>
		<?php echo $form->textField($model,'marginacion_alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marginacion_media'); ?>
		<?php echo $form->textField($model,'marginacion_media'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marginacion_baja'); ?>
		<?php echo $form->textField($model,'marginacion_baja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marginacion_muy_baja'); ?>
		<?php echo $form->textField($model,'marginacion_muy_baja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_proyecto_institucional'); ?>
		<?php echo $form->textField($model,'id_proyecto_institucional'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_unidad_beneficiario'); ?>
		<?php echo $form->textField($model,'id_unidad_beneficiario'); ?>
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