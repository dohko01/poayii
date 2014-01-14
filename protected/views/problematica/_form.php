<?php
/* @var $this ProblematicaController */
/* @var $model Problematica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'problematica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
            <table>
                <tr>
                    <td>
                        <table>
                            <thead>
                                <tr><th>Causas</th></tr>
                            </thead>
                            <tbody id="tblCausas">
                                <tr><td><?php echo CHtml::textField('causas[]','',array('size'=>'50')); ?></td></tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>
                                    <?php
                                        $this->widget('zii.widgets.jui.CJuiButton',array(
                                            'buttonType'=>'link',
                                            'name'=>'addCausa',
                                            'url'=>'#',
                                            'caption'=>'+',
                                            )
                                        );
                                    ?>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </td>
                    <td>
                        <table>
                            <thead>
                                <tr><th>Efectos</th></tr>
                            </thead>
                            <tbody id="tblEfectos">
                                <tr><td><?php echo CHtml::textField('efectos[]','',array('size'=>'50')); ?></td></tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>
                                    <?php
                                        $this->widget('zii.widgets.jui.CJuiButton',array(
                                            'buttonType'=>'link',
                                            'name'=>'addEfecto',
                                            'url'=>'#',
                                            'caption'=>'+',
                                            )
                                        );
                                    ?>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </td>
                </tr>
            </table>
            <?php /*
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>*/?>

        <?php
            if(empty($arbolProblema)){
                echo $form->hiddenField($model,'id_arbol_problematica');
            }else{
                echo $form->hiddenField($model,'id_arbol_problematica',array('value'=>$arbolProblema->id_arbol_problematica));
            }
        ?>

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