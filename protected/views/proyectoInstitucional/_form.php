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
    'htmlOptions' => array('class'=>'form-horizontal'),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
    
    <div class="control-group">
        <?php echo CHtml::label('Finalidad', 'finalidad', array('class'=>'control-label')); ?>
        <div class="controls">
        <?php echo CHtml::dropDownList('finalidad', $model->SubSubfuncion->Subfuncion->Funcion->id_finalidad, 
                                    CHtml::listData(Finalidad::model()->findAll(array('order'=>'descripcion ASC')), 'id_finalidad', 'descripcion'),
                                    array('empty'=>'Seleccionar..', 'class'=>'span6',
                                            'ajax' => array(
                                                    'type'   => 'POST',
                                                    'url'    => CController::createUrl('Funcion/getAll'),
                                                    'update' => '#funcion',
                                                    'beforeSend' => 'function(){$("#funcion option:first").text("Cargando datos...");}')
                                        ) ); ?>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo CHtml::label('Función', 'funcion', array('class'=>'control-label')); ?>
        <div class="controls">
        <?php echo CHtml::dropDownList('funcion', $model->SubSubfuncion->Subfuncion->Funcion, 
                                    CHtml::listData(Funcion::model()->findAll(array('order'=>'descripcion ASC')), 'id_funcion', 'descripcion'),
                                    array('empty'=>'Seleccionar..', 'class'=>'span6',
                                            'ajax' => array(
                                                    'type'   => 'POST',
                                                    'url'    => CController::createUrl('SubFuncion/getAll'),
                                                    'update' => '#subfuncion',
                                                    'beforeSend' => 'function(){$("#subfuncion option:first").text("Cargando datos...");}')
                                        ) ); ?>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo CHtml::label('Sub Función', 'subfuncion', array('class'=>'control-label')); ?>
        <div class="controls">
        <?php echo CHtml::dropDownList('subfuncion', $model->SubSubfuncion->Subfuncion, 
                                    CHtml::listData(Subfuncion::model()->findAll(array('order'=>'descripcion ASC')), 'id_subfuncion', 'descripcion'),
                                    array('empty'=>'Seleccionar..', 'class'=>'span6',
                                            'ajax' => array(
                                                    'type'   => 'POST',
                                                    'url'    => CController::createUrl('SubSubFuncion/getAll'),
                                                    'update' => '#ProyectoInstitucional_id_sub_subfuncion',
                                                    'beforeSend' => 'function(){$("#ProyectoInstitucional_id_sub_subfuncion option:first").text("Cargando datos...");}')
                                        ) ); ?>
        </div>
    </div>
    
	<div class="control-group">
		<?php echo $form->labelEx($model,'id_sub_subfuncion', array('class'=>'control-label')); ?>
        <div class="controls">
		<?php echo $form->dropDownList($model, 'id_sub_subfuncion',
                                    CHtml::listData(SubSubfuncion::model()->findAll(array('order'=>'descripcion ASC')), 'id_sub_subfuncion', 'descripcion'),
                                    array('empty'=>'Seleccionar..', 'class'=>'span6',) ); ?>
        </div>
		<?php echo $form->error($model,'id_sub_subfuncion'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'id_programa_especial', array('class'=>'control-label')); ?>
        <div class="controls">
		<?php echo $form->dropDownList($model, 'id_programa_especial',
                                    CHtml::listData(ProgramaEspecial::model()->findAll(array('order'=>'nombre ASC')), 'id_programa_especial', 'nombre'),
                                    array('empty'=>'Seleccionar..', 'class'=>'span6',) ); ?>
        </div>
		<?php echo $form->error($model,'id_programa_especial'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'id_actividad_institucional', array('class'=>'control-label')); ?>
        <div class="controls">
		<?php echo $form->dropDownList($model, 'id_actividad_institucional',
                                    CHtml::listData(ActividadInstitucional::model()->findAll(array('order'=>'descripcion ASC')), 'id_actividad_institucional', 'descripcion'),
                                    array('empty'=>'Seleccionar..', 'class'=>'span6',) ); ?>
        </div>
		<?php echo $form->error($model,'id_actividad_institucional'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'id_proyecto_estrategico', array('class'=>'control-label')); ?>
        <div class="controls">
		<?php echo $form->dropDownList($model, 'id_proyecto_estrategico',
                                    CHtml::listData(ProyectoEstrategico::model()->findAll(array('order'=>'descripcion ASC')), 'id_proyecto_estrategico', 'descripcion'),
                                    array('empty'=>'Seleccionar..', 'class'=>'span6',) ); ?>
        </div>
		<?php echo $form->error($model,'id_proyecto_estrategico'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'numero_proyecto_estrategico', array('class'=>'control-label')); ?>
        <div class="controls">
		<?php echo $form->textField($model,'numero_proyecto_estrategico', array('class'=>'span6',)); ?>
        </div>
		<?php echo $form->error($model,'numero_proyecto_estrategico'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'nombre_tecnico', array('class'=>'control-label')); ?>
        <div class="controls">
		<?php echo $form->textField($model,'nombre_tecnico',array('size'=>60,'maxlength'=>255, 'class'=>'span6',)); ?>
        </div>
		<?php echo $form->error($model,'nombre_tecnico'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'id_proyecto_tipo', array('class'=>'control-label')); ?>
        <div class="controls">
		<?php echo $form->dropDownList($model, 'id_proyecto_tipo',
                                    CHtml::listData(ProyectoTipo::model()->findAll(array('order'=>'descripcion ASC')), 'id_proyecto_tipo', 'descripcion'),
                                    array('empty'=>'Seleccionar..', 'class'=>'span6',) ); ?>
        </div>
		<?php echo $form->error($model,'id_proyecto_tipo'); ?>
	</div>
    
    <div class="control-group">
		<?php echo $form->labelEx($model,'id_cobertura', array('class'=>'control-label')); ?>
        <div class="controls">
		<?php echo $form->dropDownList($model, 'id_cobertura',
                                    CHtml::listData(Cobertura::model()->findAll(), 'id_cobertura', 'nombre'),
                                    array('empty'=>'Seleccionar..', 'class'=>'span6',) ); ?>
        </div>
		<?php echo $form->error($model,'id_cobertura'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'id_tipo_accion', array('class'=>'control-label')); ?>
        <div class="controls">
		<?php echo $form->dropDownList($model, 'id_tipo_accion',
                                    CHtml::listData(TipoAccion::model()->findAll(array('order'=>'nombre ASC')), 'id_tipo_accion', 'nombre'),
                                    array('empty'=>'Seleccionar..', 'class'=>'span6',) ); ?>
        </div>
		<?php echo $form->error($model,'id_tipo_accion'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'lider_proyecto', array('class'=>'control-label')); ?>
        <div class="controls">
		<?php echo $form->textField($model,'lider_proyecto',array('size'=>60,'maxlength'=>255, 'class'=>'span6',)); ?>
        </div>
		<?php echo $form->error($model,'lider_proyecto'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'jefe_inmediato', array('class'=>'control-label')); ?>
        <div class="controls">
		<?php echo $form->textField($model,'jefe_inmediato',array('size'=>60,'maxlength'=>255, 'class'=>'span6',)); ?>
        </div>
		<?php echo $form->error($model,'jefe_inmediato'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'jefe_planeacion', array('class'=>'control-label')); ?>
        <div class="controls">
		<?php echo $form->textField($model,'jefe_planeacion',array('size'=>60,'maxlength'=>255, 'class'=>'span6',)); ?>
		</div>
        <?php echo $form->error($model,'jefe_planeacion'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'coordinador_grupo_estrategico', array('class'=>'control-label')); ?>
        <div class="controls">
		<?php echo $form->textField($model,'coordinador_grupo_estrategico',array('size'=>60,'maxlength'=>255, 'class'=>'span6',)); ?>
        </div>
		<?php echo $form->error($model,'coordinador_grupo_estrategico'); ?>
	</div>

	<div class="form-actions">
		<?php 
        $this->widget('zii.widgets.jui.CJuiButton',array(
            'buttonType'=>'button',
            'name'=>'btnEnviarForm',
            'htmlOptions' => array('onClick'=>'window.open(\'/poayii/beneficiario/create\',\'_self\')'),
            'value'=>'1',
            'caption'=>($model->isNewRecord ? 'Guardar' : 'Actualizar'),
            'htmlOptions' => array('class'=>'btn btn-primary')
            )
        );
        ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->