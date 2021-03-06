<?php
/* @var $this CaratulaPoaController */
/* @var $model CaratulaPoa */

$this->breadcrumbs=array(
	$this->title_sin=>array('index'),
	$model->id_caratula_poa,
);

$this->menu=array(
	array('label'=>'Listar '.$this->title_plu, 'url'=>array('index')),
	array('label'=>'Crear '.$this->title_sin, 'url'=>array('create')),
	array('label'=>'Actualizar '.$this->title_sin, 'url'=>array('update', 'id'=>$model->id_caratula_poa)),
	array('label'=>'Eliminar '.$this->title_sin, 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_caratula_poa),'confirm'=>'¿Esta seguro que desea eliminar el registro?','csrf'=>true)),
	array('label'=>'Administrar '.$this->title_plu, 'url'=>array('admin')),
);
?>

<h1>Datos del <?php echo $this->title_sin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_programa_presupuestario',
		'id_unidad',
		'id_politica_publica',
		'id_programa_sectorial',
		'id_usuario',
	),
)); ?>
