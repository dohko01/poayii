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
<?php //print_r($modelArbolProblema->getProblemas()); ?>
	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($modelArbolProblema); ?>
        <fieldset>
                <legend>Arbol de Problemas</legend>
            <div class="row">
                    <?php echo $form->labelEx($modelArbolProblema,'definicion_problematica'); ?>
                    <?php echo $form->textArea($modelArbolProblema,'definicion_problematica',array('rows'=>6, 'cols'=>50)); ?>
                    <?php echo $form->error($modelArbolProblema,'definicion_problematica'); ?>
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
                                    <?php
                                        $causas = $modelArbolProblema->getCausas();
                                        foreach($causas as $causa)
                                        {
                                    ?>
                                    <tr><td><?php echo CHtml::textField('causas[]',$causa->descripcion,array('size'=>'50')); ?></td></tr>
                                    <?php
                                        }
                                    ?>
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
                                    <?php
                                        $efectos = $modelArbolProblema->getEfectos();
                                        foreach($efectos as $efecto)
                                        {
                                    ?>
                                    <tr><td><?php echo CHtml::textField('efectos[]',$efecto->descripcion,array('size'=>'50')); ?></td></tr>
                                    <?php
                                        }
                                    ?>
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
                    <?php echo $form->textArea($modelArbolObjetivo,'definicion_objetivo',array('rows'=>6, 'cols'=>50,'value'=>$arbolObjetivo->definicion_objetivo)); ?>
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
                                    <?php
                                        $medios = $modelArbolObjetivo->getMedios();
                                        foreach($medios as $medio)
                                        {
                                    ?>
                                    <tr><td><?php echo CHtml::textField('medios[]',$medio->descripcion,array('size'=>'50')); ?></td></tr>
                                    <?php
                                        }
                                    ?>
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
                                    <?php
                                        $fines = $modelArbolObjetivo->getFines();
                                        foreach($fines as $fin)
                                        {
                                    ?>
                                    <tr><td><?php echo CHtml::textField('fines[]',$fin->descripcion,array('size'=>'50')); ?></td></tr>
                                    <?php
                                        }
                                    ?>
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
                echo $form->hiddenField($modelArbolProblema,'id_programa_presupuestal',array('value'=>$id_programa_presupuestal));
            }else{
                 echo $form->hiddenField($modelArbolProblema,'id_programa_presupuestal');
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
                    'caption'=>($modelArbolProblema->isNewRecord ? 'Siguiente' : 'Actualizar'),
                    )
                );
                ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->