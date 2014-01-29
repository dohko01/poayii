<?php
/* @var $this ObjetivoIndicadorController */
/* @var $model ObjetivoIndicador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'objetivo-indicador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
        <fieldset>
            <legend><h1>Objetivos e Indicadores del Proposito</h1></legend>
            <div class="row">
                    <?php echo $form->labelEx($model,'objetivo'); ?>
                    <?php echo $form->textArea($model,'objetivo',array('rows'=>6, 'cols'=>50)); ?>
                    <?php echo $form->error($model,'objetivo'); ?>
            </div>

            <div class="row">
                    <?php $list = CHtml::listData(Ambito::model()->findAll(),'id_ambito','descripcion');?>
                    <?php echo $form->labelEx($model,'id_ambito'); ?>
                    <?php echo $form->dropDownList($model,'id_ambito',$list,array('empty'=>'Seleccionar...')); ?>
                    <?php echo $form->error($model,'id_ambito'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($model,'medio_verificacion'); ?>
                    <?php echo $form->textField($model,'medio_verificacion',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'medio_verificacion'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($model,'supuestos'); ?>
                    <?php echo $form->textField($model,'supuestos',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'supuestos'); ?>
            </div>
            
            <fieldset>
                <legend><h1>Indicadores del Proposito</h1></legend>
                <?php //echo $form->errorSummary($modelIndicador); ?>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'descripcion_objetivo'); ?>
                        <?php echo $form->textArea($modelIndicador,'descripcion_objetivo',array('rows'=>6, 'cols'=>50)); ?>
                        <?php echo $form->error($modelIndicador,'descripcion_objetivo'); ?>
                </div>
                
                <?php $list = CHtml::listData(Variable::model()->findAll(),'id_variable','descripcion'); ?>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'id_variable_numerador'); ?>
                        <table border="1">
                            <tr>
                                <td style="width: 20px">
                                    <?php echo $form->dropDownList($modelIndicador,'id_variable_numerador',$list,array('empty'=>'Seleccionar...','style'=>'width: 200px')); ?>
                                </td>
                                <td>
                                    <div id="valorNumerador"></div>
                                </td>
                            </tr>
                        </table>
                        <?php echo $form->error($modelIndicador,'id_variable_numerador'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'id_variable_denominador'); ?>
                        <table border="1">
                            <tr>
                                <td style="width: 20px">
                                    <?php echo $form->dropDownList($modelIndicador,'id_variable_denominador',$list,array('empty'=>'Seleccionar...','style'=>'width: 200px')); ?>
                                </td>
                                <td>
                                    <div id="valorDenominador"></div>
                                </td>
                            </tr>
                        </table>
                        <?php echo $form->error($modelIndicador,'id_variable_denominador'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'id_formula_indicador'); ?>
                        <?php echo $form->textField($modelIndicador,'id_formula_indicador'); ?>
                        <?php echo $form->error($modelIndicador,'id_formula_indicador'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'id_tipo_indicador'); ?>
                        <?php echo $form->textField($modelIndicador,'id_tipo_indicador'); ?>
                        <?php echo $form->error($modelIndicador,'id_tipo_indicador'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'id_unidad_medida'); ?>
                        <?php echo $form->textField($modelIndicador,'id_unidad_medida'); ?>
                        <?php echo $form->error($modelIndicador,'id_unidad_medida'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'interpretacion'); ?>
                        <?php echo $form->textArea($modelIndicador,'interpretacion',array('rows'=>6, 'cols'=>50)); ?>
                        <?php echo $form->error($modelIndicador,'interpretacion'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'id_comportamiento'); ?>
                        <?php echo $form->textField($modelIndicador,'id_comportamiento'); ?>
                        <?php echo $form->error($modelIndicador,'id_comportamiento'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'id_dimension_indicador'); ?>
                        <?php echo $form->textField($modelIndicador,'id_dimension_indicador'); ?>
                        <?php echo $form->error($modelIndicador,'id_dimension_indicador'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'id_frecuencia'); ?>
                        <?php echo $form->textField($modelIndicador,'id_frecuencia'); ?>
                        <?php echo $form->error($modelIndicador,'id_frecuencia'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'linea_base'); ?>
                        <?php echo $form->textField($modelIndicador,'linea_base',array('size'=>60,'maxlength'=>255)); ?>
                        <?php echo $form->error($modelIndicador,'linea_base'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'anio_linea_base'); ?>
                        <?php echo $form->textField($modelIndicador,'anio_linea_base'); ?>
                        <?php echo $form->error($modelIndicador,'anio_linea_base'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'meta_indicador'); ?>
                        <?php echo $form->textField($modelIndicador,'meta_indicador'); ?>
                        <?php echo $form->error($modelIndicador,'meta_indicador'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'primer_trimestre'); ?>
                        <?php echo $form->textField($modelIndicador,'primer_trimestre'); ?>
                        <?php echo $form->error($modelIndicador,'primer_trimestre'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'segundo_trimestre'); ?>
                        <?php echo $form->textField($modelIndicador,'segundo_trimestre'); ?>
                        <?php echo $form->error($modelIndicador,'segundo_trimestre'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'tercer_trimestre'); ?>
                        <?php echo $form->textField($modelIndicador,'tercer_trimestre'); ?>
                        <?php echo $form->error($modelIndicador,'tercer_trimestre'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'cuarto_trimestre'); ?>
                        <?php echo $form->textField($modelIndicador,'cuarto_trimestre'); ?>
                        <?php echo $form->error($modelIndicador,'cuarto_trimestre'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($modelIndicador,'total'); ?>
                        <?php echo $form->textField($modelIndicador,'total'); ?>
                        <?php echo $form->error($modelIndicador,'total'); ?>
                </div>
            </fieldset>
            
        </fieldset>
<?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_programa_presupuestal'); ?>
		<?php echo $form->textField($model,'id_programa_presupuestal'); ?>
		<?php echo $form->error($model,'id_programa_presupuestal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_objetivo'); ?>
		<?php echo $form->textField($model,'id_objetivo'); ?>
		<?php echo $form->error($model,'id_objetivo'); ?>
	</div>
*/?>

	<div class="row buttons">
		<?php 
        $this->widget('zii.widgets.jui.CJuiButton',array(
            'buttonType'=>'button',
            'name'=>'btnEnviarForm',
            'htmlOptions' => array('onClick'=>'window.open(\'/poayii/proyectoInstitucional/create\',\'_self\')'),
            'value'=>'1',
            'caption'=>($model->isNewRecord ? 'Guardar' : 'Actualizar'),
            )
        );
        ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->