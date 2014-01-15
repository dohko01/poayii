<?php
/* @var $this ArbolProblemaController */
/* @var $model ArbolProblema */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'arbol-problema-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
        <fieldset>
                <legend>Arbol de Problemas</legend>
            <div class="row">
                    <?php echo $form->labelEx($model,'definicion_problematica'); ?>
                    <?php echo $form->textArea($model,'definicion_problematica',array('rows'=>6, 'cols'=>50)); ?>
                    <?php echo $form->error($model,'definicion_problematica'); ?>
            </div>

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
            </div>
        </fieldset>
        
        <fieldset>
                <legend>Arbol de Objetivos</legend>
            <div class="row">
                    <?php echo $form->labelEx($modelArbolObjetivo,'definicion_objetivo'); ?>
                    <?php echo $form->textArea($modelArbolObjetivo,'definicion_objetivo',array('rows'=>6, 'cols'=>50)); ?>
                    <?php echo $form->error($modelArbolObjetivo,'definicion_objetivo'); ?>
            </div>

            <div class="row">
                <table>
                    <tr>
                        <td>
                            <table>
                                <thead>
                                    <tr><th>Medios</th></tr>
                                </thead>
                                <tbody id="tblMedios">
                                    <tr><td><?php echo CHtml::textField('medios[]','',array('size'=>'50')); ?></td></tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>
                                        <?php
                                            $this->widget('zii.widgets.jui.CJuiButton',array(
                                                'buttonType'=>'link',
                                                'name'=>'addMedio',
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
                                    <tr><th>Fines</th></tr>
                                </thead>
                                <tbody id="tblFines">
                                    <tr><td><?php echo CHtml::textField('fines[]','',array('size'=>'50')); ?></td></tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>
                                        <?php
                                            $this->widget('zii.widgets.jui.CJuiButton',array(
                                                'buttonType'=>'link',
                                                'name'=>'addFin',
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
            </div>
        </fieldset>
        <?php 
            if(isset($id_programa_presupuestal)){
                echo $form->hiddenField($model,'id_programa_presupuestal',array('value'=>$id_programa_presupuestal));
            }else{
                 echo $form->hiddenField($model,'id_programa_presupuestal');
            }
            
            if(isset($id_programa_presupuestal)){
                echo $form->hiddenField($modelArbolObjetivo,'id_programa_presupuestal',array('value'=>$id_programa_presupuestal));
            }else{
                 echo $form->hiddenField($modelArbolObjetivo,'id_programa_presupuestal');
            }
        ?>
<?php/*
	<div class="row">
		<?php echo $form->labelEx($model,'id_programa_presupuestal'); ?>
		<?php echo $form->textField($model,'id_programa_presupuestal'); ?>
		<?php echo $form->error($model,'id_programa_presupuestal'); ?>
	</div>
*/?>
	<div class="row buttons">
		<?php 
                $this->widget('zii.widgets.jui.CJuiButton',array(
                    'buttonType'=>'submit',
                    'name'=>'btnEnviarForm',
                    'value'=>'1',
                    'caption'=>($model->isNewRecord ? 'Siguiente' : 'Actualizar'),
                    )
                );
                ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->