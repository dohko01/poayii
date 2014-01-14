<?php
/* @var $this ProgramaPresupuestalController */
/* @var $model ProgramaPresupuestal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'programa-presupuestal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <fieldset>
            <legend>Plan Estatal de Desarrollo</legend>
            
            <div class="row">
                    <?php echo $form->labelEx($model,'Eje'); ?>
                    <?php echo CHtml::textField('nombre_responsable_unidad',$planEstatalDesarrollo['eje'],array('size'=>60,'maxlength'=>255)); ?>
                    <?php //echo $form->error($model,'nombre_responsable_unidad'); ?>
            </div>
            
            <div class="row">
                    <?php echo $form->labelEx($model,'Tema'); ?>
                    <?php echo CHtml::textField('nombre_responsable_unidad',$planEstatalDesarrollo['tema'],array('size'=>60,'maxlength'=>255)); ?>
                    <?php //echo $form->error($model,'nombre_responsable_unidad'); ?>
            </div>
            
            <div class="row">
                    <?php echo $form->labelEx($model,'Politica Publica'); ?>
                    <?php echo CHtml::textField('nombre_responsable_unidad',$planEstatalDesarrollo['politicaPublica'],array('size'=>60,'maxlength'=>255)); ?>
                    <?php //echo $form->error($model,'nombre_responsable_unidad'); ?>
            </div>
        </fieldset>
        
        <fieldset>
            <legend>Unidad Responsable</legend>
            
            <div class="row">
                    <?php echo $form->labelEx($model,'Entidad'); ?>
                    <?php echo CHtml::textField('nombre_responsable_unidad',$unidadResponsable['entidad'],array('size'=>60,'maxlength'=>255)); ?>
                    <?php //echo $form->error($model,'nombre_responsable_unidad'); ?>
            </div>
            
            <div class="row">
                    <?php echo $form->labelEx($model,'Ente Publico'); ?>
                    <?php echo CHtml::textField('nombre_responsable_unidad',$unidadResponsable['entePublico'],array('size'=>60,'maxlength'=>255)); ?>
                    <?php //echo $form->error($model,'nombre_responsable_unidad'); ?>
            </div>
            
            <div class="row">
                    <?php echo $form->labelEx($model,'Unidad'); ?>
                    <?php echo CHtml::textField('nombre_responsable_unidad',$unidadResponsable['unidad'],array('size'=>60,'maxlength'=>255)); ?>
                    <?php //echo $form->error($model,'nombre_responsable_unidad'); ?>
            </div>
            
            <div class="row">
                    <?php echo $form->labelEx($model,'nombre_responsable_unidad'); ?>
                    <?php echo $form->textField($model,'nombre_responsable_unidad',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'nombre_responsable_unidad'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($model,'email_responsable_unidad'); ?>
                    <?php echo $form->textField($model,'email_responsable_unidad',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'email_responsable_unidad'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($model,'telefono_responsable_unidad'); ?>
                    <?php echo $form->textField($model,'telefono_responsable_unidad',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'telefono_responsable_unidad'); ?>
            </div>
        </fieldset>
        
        <div class="row">
                <?php $list = CHtml::listData(ObjetivoPnd::model()->findAll(),'id_objetivo_pnd','descripcion');?>
		<?php echo $form->labelEx($model,'id_objetivo_pnd'); ?>
		<?php echo $form->dropDownList($model,'id_objetivo_pnd',$list); ?>
		<?php echo $form->error($model,'id_objetivo_pnd'); ?>
	</div>

	<div class="row">
                <?php $list = CHtml::listData(ObjetivosMilenio::model()->findAll(),'id_objetivo_milenio','nombre');?>
		<?php echo $form->labelEx($model,'id_objetivo_milenio'); ?>
		<?php echo $form->dropDownList($model,'id_objetivo_milenio',$list); ?>
		<?php echo $form->error($model,'id_objetivo_milenio'); ?>
	</div>

	<div class="row">
                <?php $list = CHtml::listData(Modalidad::model()->findAll(),'id_modalidad','nombre');?>
		<?php echo $form->labelEx($model,'id_modalidad'); ?>
		<?php echo $form->dropDownList($model,'id_modalidad',$list); ?>
		<?php echo $form->error($model,'id_modalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio_inicio'); ?>
		<?php echo $form->textField($model,'anio_inicio'); ?>
		<?php echo $form->error($model,'anio_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio_termino'); ?>
		<?php echo $form->textField($model,'anio_termino'); ?>
		<?php echo $form->error($model,'anio_termino'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resultados_esperados'); ?>
		<?php echo $form->textArea($model,'resultados_esperados',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resultados_esperados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'justificacion'); ?>
		<?php echo $form->textArea($model,'justificacion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'justificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuantificacion_area_enfoque_potencial'); ?>
		<?php echo $form->textField($model,'cuantificacion_area_enfoque_potencial'); ?>
		<?php echo $form->error($model,'cuantificacion_area_enfoque_potencial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area_enfoque_objetivo'); ?>
		<?php echo $form->textArea($model,'area_enfoque_objetivo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'area_enfoque_objetivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuantificacion_area_enfoque_objetivo'); ?>
		<?php echo $form->textField($model,'cuantificacion_area_enfoque_objetivo'); ?>
		<?php echo $form->error($model,'cuantificacion_area_enfoque_objetivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area_enfoque_potencial'); ?>
		<?php echo $form->textArea($model,'area_enfoque_potencial',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'area_enfoque_potencial'); ?>
	</div>

<?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'id_caratula_poa'); ?>
		<?php echo $form->textField($model,'id_caratula_poa'); ?>
		<?php echo $form->error($model,'id_caratula_poa'); ?>
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