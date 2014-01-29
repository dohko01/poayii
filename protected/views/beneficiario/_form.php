<?php
/* @var $this BeneficiarioController */
/* @var $model Beneficiario */
/* @var $form CActiveForm */

$baseUrl = Yii::app()->request->baseUrl;

//Yii::app()->getClientScript()->registerCssFile($baseUrl.'/.css');
Yii::app()->getClientScript()->registerScriptFile($baseUrl.'/js/beneficiario.js');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'beneficiario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('class'=>'form-horizontal'),
)); 

$sizeText = 6;
$spanNumber = 'span2';
?>
	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
    <?php echo $form->hiddenField($model,'id_proyecto_institucional'); ?>
    
    <div class="control-group">
        <?php echo $form->labelEx($model,'id_unidad_beneficiario', array('class'=>'control-label')); ?>
        <div class="controls">
        <?php echo $form->dropDownList($model, 'id_unidad_beneficiario',
                                        CHtml::listData(UnidadBeneficiario::model()->findAll(array('order'=>'nombre ASC')), 'id_unidad_beneficiario', 'nombre'),
                                        array('empty'=>'Seleccionar..', 'class'=>'span6', 'required'=>'required') );  ?>
        <?php echo $form->error($model,'id_unidad_beneficiario'); ?>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo $form->labelEx($model,'genero', array('class'=>'control-label')); ?>
        <div class="controls form-inline">
        <?php echo $form->dropDownList($model, 'genero',
                                    array(1=>'Femenino', 2=>'Masculino'),
                                    array('empty'=>'Seleccionar..', 'class'=>'span3', 'required'=>'required')); ?>
        <?php echo $form->error($model,'genero'); ?>
        
        <?php echo $form->labelEx($model,'total'); ?>
        <?php echo $form->numberField($model,'total',array('size'=>$sizeText, 'class'=>$spanNumber, 'min'=>'0', 'required'=>'required')); ?>
        <?php echo $form->error($model,'total'); ?>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo CHtml::label('Zona', 'zona', array('class'=>'control-label')); ?>
        <div class="controls form-inline">
        <?php echo $form->labelEx($model,'urbano'); ?>
        <?php echo $form->numberField($model,'urbano',array('size'=>$sizeText, 'class'=>$spanNumber, 'min'=>'0')); ?>
        <?php echo $form->error($model,'urbano'); ?>
        
        <?php echo $form->labelEx($model,'rural'); ?>
        <?php echo $form->numberField($model,'rural',array('size'=>$sizeText, 'class'=>$spanNumber, 'min'=>'0')); ?>
        <?php echo $form->error($model,'rural'); ?>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo CHtml::label('Población', 'poblacion', array('class'=>'control-label')); ?>
        <div class="controls form-inline">
        <?php echo $form->labelEx($model,'mestizo'); ?>
        <?php echo $form->numberField($model,'mestizo',array('size'=>$sizeText, 'class'=>$spanNumber, 'min'=>'0')); ?>
        <?php echo $form->error($model,'mestizo'); ?>
            
        <?php echo $form->labelEx($model,'indigena'); ?>
        <?php echo $form->numberField($model,'indigena',array('size'=>$sizeText, 'class'=>$spanNumber, 'min'=>'0')); ?>
        <?php echo $form->error($model,'indigena'); ?>
        
        <?php echo $form->labelEx($model,'inmigrante'); ?>
        <?php echo $form->numberField($model,'inmigrante',array('size'=>$sizeText, 'class'=>$spanNumber, 'min'=>'0')); ?>
        <?php echo $form->error($model,'inmigrante'); ?>
            
        <?php echo $form->labelEx($model,'otros'); ?>
        <?php echo $form->numberField($model,'otros',array('size'=>$sizeText, 'class'=>$spanNumber, 'min'=>'0')); ?>
        <?php echo $form->error($model,'otros'); ?>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo CHtml::label('Marginación', 'marginacion', array('class'=>'control-label')); ?>
        <div class="controls form-inline">
        <?php echo $form->labelEx($model,'marginacion_muy_alta'); ?>
        <?php echo $form->numberField($model,'marginacion_muy_alta',array('size'=>$sizeText, 'class'=>$spanNumber, 'min'=>'0')); ?>
        <?php echo $form->error($model,'marginacion_muy_alta'); ?>
        
        <?php echo $form->labelEx($model,'marginacion_alta'); ?>
        <?php echo $form->numberField($model,'marginacion_alta',array('size'=>$sizeText, 'class'=>$spanNumber, 'min'=>'0')); ?>
        <?php echo $form->error($model,'marginacion_alta'); ?>
        
        <?php echo $form->labelEx($model,'marginacion_media'); ?>
        <?php echo $form->numberField($model,'marginacion_media',array('size'=>$sizeText, 'class'=>$spanNumber, 'min'=>'0')); ?>
        <?php echo $form->error($model,'marginacion_media'); ?>
        
        <?php echo $form->labelEx($model,'marginacion_baja'); ?>
        <?php echo $form->numberField($model,'marginacion_baja',array('size'=>$sizeText, 'class'=>$spanNumber, 'min'=>'0')); ?>
        <?php echo $form->error($model,'marginacion_baja'); ?>
        
        <?php echo $form->labelEx($model,'marginacion_muy_baja'); ?>
        <?php echo $form->numberField($model,'marginacion_muy_baja',array('size'=>$sizeText, 'class'=>$spanNumber, 'min'=>'0')); ?>
        <?php echo $form->error($model,'marginacion_muy_baja'); ?>
        </div>
    </div>
    
    <div class="form-actions">
		<?php 
        $this->widget('zii.widgets.jui.CJuiButton',array(
            'buttonType'=>'button',
            'name'=>'btnAgregarBeneficiario',
            'value'=>'1',
            'caption'=>'Agregar',
            )
        );
        ?>
	</div>
    
    <br>
    
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped" id="tblBeneficiarios">
            <thead>
                <tr>
                    <th rowspan="2">Descripción del Beneficiario</th>
                    <th rowspan="2">Genero</th>
                    <th rowspan="2">Total</th>
                    <th colspan="2">Zona</th>
                    <th colspan="4">Población</th>
                    <th colspan="5">Marginación</th>
                </tr>
                <tr>
                    <th>Urbana</th>
                    <th>Rural</th>
                    <th>Mestiza</th>
                    <th>Indigena</th>
                    <th>Inmigrante</th>
                    <th>Otros</th>
                    <th>Muy Alta</th>
                    <th>Alta</th>
                    <th>Media</th>
                    <th>Baja</th>
                    <th>Muy Baja</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    
	<div class="form-actions">
		<?php 
        $this->widget('zii.widgets.jui.CJuiButton',array(
            'buttonType'=>'button',
            'name'=>'btnEnviarForm',
            'value'=>'1',
            'caption'=>($model->isNewRecord ? 'Guardar' : 'Actualizar'),
            'htmlOptions' => array('class'=>'btn btn-primary'),
            )
        );
        ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->