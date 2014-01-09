<?php
/* @var $this ObjetivoController */
/* @var $model Objetivo */

$this->breadcrumbs=array(
	$this->title_sin=>array('index'),
	$model->id_objetivo,
);

$this->menu=array(
	array('label'=>'Listar '.$this->title_plu, 'url'=>array('index')),
	array('label'=>'Crear '.$this->title_sin, 'url'=>array('create')),
	array('label'=>'Actualizar '.$this->title_sin, 'url'=>array('update', 'id'=>$model->id_objetivo)),
	array('label'=>'Eliminar '.$this->title_sin, 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_objetivo),'confirm'=>'¿Esta seguro que desea eliminar el registro?','csrf'=>true)),
	array('label'=>'Administrar '.$this->title_plu, 'url'=>array('admin')),
);
?>

<h1>Datos del <?php echo $this->title_sin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'descripcion',
		'tipo',
		'id_arbol_objetivo',
	),
)); ?>
