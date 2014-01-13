<?php
/* @var $this CaratulaPoaController */
/* @var $model CaratulaPoa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'caratula-poa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
                <?php
                    $finAllProgramaPresupuestario = ProgramaPresupuestario::model()->findAll();
                    $listProgramaPresupuestario = CHtml::listData($finAllProgramaPresupuestario,'id_programa_presupuestario', 'nombre');
                ?>
		<?php echo $form->labelEx($model,'id_programa_presupuestario'); ?>
		<?php echo $form->dropDownList($model,'id_programa_presupuestario',$listProgramaPresupuestario,array('empty'=>'Seleccionar...')); ?>
		<?php echo $form->error($model,'id_programa_presupuestario'); ?>
	</div>
        
        <div class="row">
                <?php $listProgramaSectorial = CHtml::listData(ProgramaSectorial::model()->findAll(),'id_programa_sectorial','nombre') ?>
		<?php echo $form->labelEx($model,'id_programa_sectorial'); ?>
		<?php echo $form->dropDownList($model,'id_programa_sectorial',$listProgramaSectorial,array('empty'=>'Seleccionar...')); ?>
		<?php echo $form->error($model,'id_programa_sectorial'); ?>
	</div>
        
        <fieldset>
            <legend>Unidad Responsable</legend>
            <div class="row">
                    <?php $list = CHtml::listData(Entidad::model()->findAll(),'id_entidad','nombre');?>
                    <?php echo $form->labelEx($model,'Entidad'); ?>
                    <?php echo CHtml::dropDownList('id_entidad','id_entidad',$list,
                                                        array(
                                                                'empty'=>'Seleccionar...',
                                                                'ajax' => array(
                                                                                'type' => 'POST',
                                                                                'url' => CController::createUrl('EntePublico/getEntesPublicos'),
                                                                                'update' => '#id_ente_publico',
                                                                                ),
                                                        )); ?>
                    <?php //echo $form->error($model,'id_programa_presupuestario'); ?>
            </div>
            
            <div class="row">
                    <?php $list = CHtml::listData(Eje::model()->findAll(),'id_eje','nombre');?>
                    <?php echo $form->labelEx($model,'Ente Publico'); ?>
                    <?php echo CHtml::dropDownList('id_ente_publico','id_ente_publico',$list,
                                                        array(
                                                                'empty'=>'Seleccionar...',
                                                                'ajax' => array(
                                                                                'type' => 'POST',
                                                                                'url' => CController::createUrl('Unidad/getUnidades'),
                                                                                'update' => '#CaratulaPoa_id_unidad',
                                                                                ),
                                                        )); ?>
                    <?php //echo $form->error($model,'id_programa_presupuestario'); ?>
            </div>
            
            <div class="row">
                    <?php echo $form->labelEx($model,'id_unidad'); ?>
                    <?php echo $form->dropDownList($model,'id_unidad',$list,array('empty'=>'Seleccionar...')); ?>
                    <?php echo $form->error($model,'id_unidad'); ?>
            </div>
        </fieldset>
        
        <fieldset>
            <legend>Plan Estatal de Desarrollo</legend>
            <div class="row">
                    <?php $list = CHtml::listData(Eje::model()->findAll(),'id_eje','nombre');?>
                    <?php echo $form->labelEx($model,'Eje'); ?>
                    <?php echo CHtml::dropDownList('id_eje','id_eje',$list,
                                                        array(
                                                                'empty'=>'Seleccionar...',
                                                                'ajax' => array(
                                                                                'type' => 'POST',
                                                                                'url' => CController::createUrl('Tema/getTemas'),
                                                                                'update' => '#id_tema',
                                                                                ),
                                                        )); ?>
                    <?php //echo $form->error($model,'id_programa_presupuestario'); ?>
            </div>

            <div class="row">
                    <?php $list = CHtml::listData(Tema::model()->findAll(),'id_tema','nombre');?>
                    <?php echo $form->labelEx($model,'Tema'); ?>
                    <?php echo CHtml::dropDownList('id_tema','id_tema',array(),
                                                        array(
                                                                'empty'=>'Seleccionar...',
                                                                'ajax' => array(
                                                                                'type' => 'POST',
                                                                                'url' => CController::createUrl('PoliticaPublica/getPoliticasPublicas'),
                                                                                'update' => '#CaratulaPoa_id_politica_publica',
                                                                                ),
                                                        ));?>
                    <?php echo $form->error($model,'id_tema'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($model,'id_politica_publica'); ?>
                    <?php echo $form->dropDownList($model,'id_politica_publica',array(),array('empty'=>'Seleccionar...')); ?>
                    <?php echo $form->error($model,'id_politica_publica'); ?>
            </div>
        </fieldset>
        
<?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
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