<?php
/* @var $this ArbolProblemaController */
/* @var $model ArbolProblema */

//$this->breadcrumbs=array(
//	$this->title_sin=>array('index'),
//	$model->id_arbol_problematica=>array('view','id'=>$model->id_arbol_problematica),
//	'Actualizar',
//);
//
//$this->menu=array(
//	array('label'=>'Listar '.$this->title_plu, 'url'=>array('index')),
//	array('label'=>'Crear '.$this->title_sin, 'url'=>array('create')),
//	array('label'=>'Ver '.$this->title_sin, 'url'=>array('view', 'id'=>$model->id_arbol_problematica)),
//	array('label'=>'Administrar '.$this->title_plu, 'url'=>array('admin')),
//);
?>

<h1>Actualizar <?php echo $this->title_sin; ?></h1>
<?php $this->renderPartial('_form_update', array('arbolObjetivo'=>$arbolObjetivo,'modelArbolProblema'=>$modelArbolProblema,'modelArbolObjetivo'=>$modelArbolObjetivo,'id_programa_presupuestal'=>$id_programa_presupuestal)); ?>