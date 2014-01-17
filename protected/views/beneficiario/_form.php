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
)); 

$sizeText = 6;
?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

    <?php echo $form->hiddenField($model,'id_proyecto_institucional'); ?>
    
    <table>
        <thead>
            <tr>
                <th rowspan="2">Descripción del Beneficiario</th>
                <th rowspan="2">Total</th>
                <th rowspan="2">Genero</th>
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
            <tr>
                <td>
                    <?php echo $form->dropDownList($model, 'genero',
                                                CHtml::listData(UnidadBeneficiario::model()->findAll(array('order'=>'nombre ASC')), 'id_unidad_beneficiario', 'nombre'),
                                                array('empty'=>'Seleccionar..') );  ?>
                    <?php echo $form->error($model,'id_unidad_beneficiario'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'total',array('size'=>$sizeText)); ?>
                    <?php echo $form->error($model,'total'); ?>
                </td>
                <td>
                    <?php echo $form->dropDownList($model, 'genero',
                                                array(1=>'Femenino', 2=>'Masculino'),
                                                array('empty'=>'Seleccionar..') ); ?>
                    <?php echo $form->error($model,'genero'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'urbano',array('size'=>$sizeText)); ?>
                    <?php echo $form->error($model,'urbano'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'rural',array('size'=>$sizeText)); ?>
                    <?php echo $form->error($model,'rural'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'mestizo',array('size'=>$sizeText)); ?>
                    <?php echo $form->error($model,'mestizo'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'indigena',array('size'=>$sizeText)); ?>
                    <?php echo $form->error($model,'indigena'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'inmigrante',array('size'=>$sizeText)); ?>
                    <?php echo $form->error($model,'inmigrante'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'otros',array('size'=>$sizeText)); ?>
                    <?php echo $form->error($model,'otros'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'marginacion_muy_alta',array('size'=>$sizeText)); ?>
                    <?php echo $form->error($model,'marginacion_muy_alta'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'marginacion_alta',array('size'=>$sizeText)); ?>
                    <?php echo $form->error($model,'marginacion_alta'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'marginacion_media',array('size'=>$sizeText)); ?>
                    <?php echo $form->error($model,'marginacion_media'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'marginacion_baja',array('size'=>$sizeText)); ?>
                    <?php echo $form->error($model,'marginacion_baja'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'marginacion_muy_baja',array('size'=>$sizeText)); ?>
                    <?php echo $form->error($model,'marginacion_muy_baja'); ?>
                </td>
            </tr>
        </tbody>
    </table>
    
	<div class="row buttons">
		<?php 
        $this->widget('zii.widgets.jui.CJuiButton',array(
            'buttonType'=>'button',
            'name'=>'btnAgregarBeneficiario',
            'value'=>'1',
            'caption'=>'Agregar Fila',
            )
        );
        
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