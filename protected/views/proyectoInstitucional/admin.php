<?php
/* @var $this ProyectoInstitucionalController */
/* @var $model ProyectoInstitucional */

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
	$('#proyecto-institucional-grid').yiiGridView('update', {
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
	'id'=>'proyecto-institucional-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombre_tecnico',
		'numero_proyecto_estrategico',
		'lider_proyecto',
		'jefe_inmediato',
		'jefe_planeacion',
		'coordinador_grupo_estrategico',
		/*
		'id_actividad_institucional',
		'id_sub_subfuncion',
		'id_programa_especial',
		'id_proyecto_estrategico',
		'id_proyecto_tipo',
		'id_tipo_accion',
		'id_caratula_poa',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
