<?php
/* @var $this ProgramaPresupuestalController */
/* @var $model ProgramaPresupuestal */
/*
$this->breadcrumbs=array(
	$this->title_sin=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar '.$this->title_plu, 'url'=>array('index')),
	array('label'=>'Crear '.$this->title_sin, 'url'=>array('create')),
);
*/
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#programa-presupuestal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administraci&oacute;n de <?php echo $this->title_plu; ?></h1>

<p>
Operadores de comparaci&oacute;n soportados por el campo busqueda: <b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b> o <b>=</b>
</p>

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<br>
    <?php echo CHtml::link('Regresar',Yii::app()->createUrl("caratulaPoa/admin")); ?>
<div class="search-form" style="display:none">
<?php 
    $model->id_caratula_poa = $_GET['id_caratula_poa'];
    $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'programa-presupuestal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'htmlOptions' => array('style'=>'width: 100%'),
	'columns'=>array(
		'nombre_responsable_unidad',
		'email_responsable_unidad',
		'telefono_responsable_unidad',
		'resultados_esperados',
//		'justificacion',
//		'cuantificacion_area_enfoque_potencial',
//		'area_enfoque_objetivo',
//		'cuantificacion_area_enfoque_objetivo',
//		'area_enfoque_potencial',
//		'id_objetivo_pnd',
//		'id_objetivo_milenio',
//		'id_modalidad',
//		'id_caratula_poa',
		'anio_inicio',
//		'anio_termino',
                array(
                    'header' => 'Estado',
                    'value' => 'Revisión',
                    'htmlOptions' => array('style'=>'width: 100px'),
                    'filter' => '<select><option>En Tramite</option><option>En Revision</option><option>En Correccion</option><option>Registrado</option><option>Firmado</option></select>',
                    //'html' => 'ADFADS',
                ),
	
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
