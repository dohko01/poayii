<?php
/* @var $this IndicadorController */
/* @var $model Indicador */

$this->breadcrumbs=array(
	$this->title_sin=>array('index'),
	$model->id_indicador,
);

$this->menu=array(
	array('label'=>'Listar '.$this->title_plu, 'url'=>array('index')),
	array('label'=>'Crear '.$this->title_sin, 'url'=>array('create')),
	array('label'=>'Actualizar '.$this->title_sin, 'url'=>array('update', 'id'=>$model->id_indicador)),
	array('label'=>'Eliminar '.$this->title_sin, 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_indicador),'confirm'=>'¿Esta seguro que desea eliminar el registro?','csrf'=>true)),
	array('label'=>'Administrar '.$this->title_plu, 'url'=>array('admin')),
);
?>

<h1>Datos del <?php echo $this->title_sin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'descripcion_objetivo',
		'meta_indicador',
		'tercer_trimestre',
		'cuarto_trimestre',
		'primer_trimestre',
		'id_parent_indicador',
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
	),
)); ?>
