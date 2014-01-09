<?php
/* @var $this ProgramaPresupuestalController */
/* @var $model ProgramaPresupuestal */

$this->breadcrumbs=array(
	$this->title_sin=>array('index'),
	$model->id_programa_presupuestal,
);

$this->menu=array(
	array('label'=>'Listar '.$this->title_plu, 'url'=>array('index')),
	array('label'=>'Crear '.$this->title_sin, 'url'=>array('create')),
	array('label'=>'Actualizar '.$this->title_sin, 'url'=>array('update', 'id'=>$model->id_programa_presupuestal)),
	array('label'=>'Eliminar '.$this->title_sin, 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_programa_presupuestal),'confirm'=>'¿Esta seguro que desea eliminar el registro?','csrf'=>true)),
	array('label'=>'Administrar '.$this->title_plu, 'url'=>array('admin')),
);
?>

<h1>Datos del <?php echo $this->title_sin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre_responsable_unidad',
		'email_responsable_unidad',
		'telefono_responsable_unidad',
		'anio_inicio',
		'anio_termino',
		'resultados_esperados',
		'justificacion',
		'cuantificacion_area_enfoque_potencial',
		'area_enfoque_objetivo',
		'cuantificacion_area_enfoque_objetivo',
		'area_enfoque_potencial',
		'id_programa_presupuestario',
		'id_unidad',
		'id_politica_publica',
		'id_programa_sectorial',
		'id_objetivo_pnd',
		'id_objetivo_milenio',
		'id_modalidad',
	),
)); ?>
