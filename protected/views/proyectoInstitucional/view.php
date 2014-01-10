<?php
/* @var $this ProyectoInstitucionalController */
/* @var $model ProyectoInstitucional */

$this->breadcrumbs=array(
	$this->title_sin=>array('index'),
	$model->id_proyecto_institucional,
);

$this->menu=array(
	array('label'=>'Listar '.$this->title_plu, 'url'=>array('index')),
	array('label'=>'Crear '.$this->title_sin, 'url'=>array('create')),
	array('label'=>'Actualizar '.$this->title_sin, 'url'=>array('update', 'id'=>$model->id_proyecto_institucional)),
	array('label'=>'Eliminar '.$this->title_sin, 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_proyecto_institucional),'confirm'=>'¿Esta seguro que desea eliminar el registro?','csrf'=>true)),
	array('label'=>'Administrar '.$this->title_plu, 'url'=>array('admin')),
);
?>

<h1>Datos del <?php echo $this->title_sin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre_tecnico',
		'numero_proyecto_estrategico',
		'lider_proyecto',
		'jefe_inmediato',
		'jefe_planeacion',
		'coordinador_grupo_estrategico',
		'id_actividad_institucional',
		'id_sub_subfuncion',
		'id_programa_especial',
		'id_proyecto_estrategico',
		'id_proyecto_tipo',
		'id_tipo_accion',
		'id_caratula_poa',
	),
)); ?>
