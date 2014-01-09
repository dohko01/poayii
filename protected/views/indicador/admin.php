<?php
/* @var $this IndicadorController */
/* @var $model Indicador */

$this->breadcrumbs=array(
	$this->title_sin=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar '.$this->title_plu, 'url'=>array('index')),
	array('label'=>'Crear '.$this->title_sin, 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#indicador-grid').yiiGridView('update', {
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
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'indicador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'descripcion_objetivo',
		'meta_indicador',
		'tercer_trimestre',
		'cuarto_trimestre',
		'primer_trimestre',
		'id_parent_indicador',
		/*
		'anio_linea_base',
		'id_variable_denominador',
		'total',
		'id_objetivo_indicador',
		'linea_base',
		'segundo_trimestre',
		'interpretacion',
		'id_proyecto_institucional',
		'id_unidad_medida',
		'id_formula_indicador',
		'id_tipo_indicador',
		'id_frecuencia',
		'id_comportamiento',
		'id_dimension_indicador',
		'id_variable_numerador',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
