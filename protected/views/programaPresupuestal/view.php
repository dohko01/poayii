<?php
/* @var $this ProgramaPresupuestalController */
/* @var $model ProgramaPresupuestal */

//$this->breadcrumbs=array(
//	$this->title_sin=>array('index'),
//	$model->id_programa_presupuestal,
//);
//
//$this->menu=array(
//	array('label'=>'Listar '.$this->title_plu, 'url'=>array('index')),
//	array('label'=>'Crear '.$this->title_sin, 'url'=>array('create')),
//	array('label'=>'Actualizar '.$this->title_sin, 'url'=>array('update', 'id'=>$model->id_programa_presupuestal)),
//	array('label'=>'Eliminar '.$this->title_sin, 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_programa_presupuestal),'confirm'=>'¿Esta seguro que desea eliminar el registro?','csrf'=>true)),
//	array('label'=>'Administrar '.$this->title_plu, 'url'=>array('admin')),
//);
?>

<h1>Datos del <?php echo $this->title_sin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre_responsable_unidad',
		'email_responsable_unidad',
		'telefono_responsable_unidad',
		'resultados_esperados',
		'justificacion',
		'cuantificacion_area_enfoque_potencial',
		'area_enfoque_objetivo',
		'cuantificacion_area_enfoque_objetivo',
		'area_enfoque_potencial',
                array(
                    'label' => 'Objetivo PND',
                    'value' => ($model->idObjetivoPnd!=null) ? $model->idObjetivoPnd->descripcion : null,
                ),
		array(
                    'label' => 'Objetivo del Milenio',
                    'value' => ($model->idObjetivoMilenio!=null) ? $model->idObjetivoMilenio->nombre : null,
                ),
		array(
                    'label' => 'Modalidad',
                    'value' => ($model->idModalidad!=null) ? $model->idModalidad->nombre : null,
                ),
		//'id_caratula_poa',
		'anio_inicio',
		'anio_termino',
	),
));

        $this->widget('zii.widgets.jui.CJuiButton',array(
            'buttonType'=>'link',
            'name'=>'btnArbolProblema',
            'value'=>$model->id_programa_presupuestal,
            'url'=> ($existenArboles) ? Yii::app()->createUrl('arbolProblema/update/'.$model->id_programa_presupuestal) : Yii::app()->createUrl('arbolProblema/create',array('id_programa_presupuestal'=>$model->id_programa_presupuestal)),
            'caption' => ($existenArboles) ? 'Ver Arbol de Problemas y Objetivos' : 'Capturar Arbol de Problemas y Objetivos',
            )
        );
        if($existenArboles)
        {
            $this->widget('zii.widgets.jui.CJuiButton',array(
                'buttonType'=>'link',
                'name'=>'btnIndicadores',
                'value'=>$model->id_programa_presupuestal,
                'url'=> Yii::app()->createUrl('objetivoIndicador/create',array('id_programa_presupuestal'=>$model->id_programa_presupuestal)),
                'caption' => 'Capturar Indicadores',
                )
            );
        }
?>
