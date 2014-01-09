<?php
/* @var $this BeneficiarioController */
/* @var $model Beneficiario */

$this->breadcrumbs=array(
	$this->title_sin=>array('index'),
	$model->id_beneficiario,
);

$this->menu=array(
	array('label'=>'Listar '.$this->title_plu, 'url'=>array('index')),
	array('label'=>'Crear '.$this->title_sin, 'url'=>array('create')),
	array('label'=>'Actualizar '.$this->title_sin, 'url'=>array('update', 'id'=>$model->id_beneficiario)),
	array('label'=>'Eliminar '.$this->title_sin, 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_beneficiario),'confirm'=>'¿Esta seguro que desea eliminar el registro?','csrf'=>true)),
	array('label'=>'Administrar '.$this->title_plu, 'url'=>array('admin')),
);
?>

<h1>Datos del <?php echo $this->title_sin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'total',
		'genero',
		'urbano',
		'rural',
		'mestizo',
		'indigena',
		'inmigrante',
		'otros',
		'marginacion_muy_alta',
		'marginacion_alta',
		'marginacion_media',
		'marginacion_baja',
		'marginacion_muy_baja',
		'id_proyecto_institucional',
		'id_unidad_beneficiario',
	),
)); ?>
