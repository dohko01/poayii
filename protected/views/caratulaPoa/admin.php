<?php
/* @var $this CaratulaPoaController */
/* @var $model CaratulaPoa */

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
	$('#caratula-poa-grid').yiiGridView('update', {
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
	'id'=>'caratula-poa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                array(
                    'header'=>'Programa Presupuestario',
                    'value'=>'($data->idProgramaPresupuestario!=null) ? $data->idProgramaPresupuestario->nombre : null',
                    //'filter'=>CHtml::activeTextField($model,'institucion_search')
		),
                array(
                    'header'=>'Unidad Responsable',
                    'value'=>'($data->idUnidad!=null) ? $data->idUnidad->nombre : null',
                    //'filter'=>CHtml::activeTextField($model,'institucion_search')
		),
                array(
                    'header'=>'Politica Publica',
                    'value'=>'($data->idPoliticaPublica!=null) ? $data->idPoliticaPublica->nombre : null',
                    //'filter'=>CHtml::activeTextField($model,'institucion_search')
		),
                array(
                    'header'=>'Programa Sectorial',
                    'value'=>'($data->idProgramaSectorial!=null) ? $data->idProgramaSectorial->nombre : null',
                    //'filter'=>CHtml::activeTextField($model,'institucion_search')
		),
		//'id_programa_presupuestario',
		//'id_unidad',
		//'id_politica_publica',
		//'id_programa_sectorial',
		//'id_usuario',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{programaP}{listProgramaPresupuestal}{listDistribucion}{view}{update}{delete}',
                        'buttons'=>array(
                                    'programaP' => array(
                                        'label' => 'Agregar Programa Presupuestal',
                                        'imageUrl' => Yii::app()->request->baseUrl.'/images/presupuesto.png',
                                        'url' => 'Yii::app()->createUrl("ProgramaPresupuestal/create", array("id_caratula_poa"=>"$data->id_caratula_poa"))',
                                    ),
                                    'listProgramaPresupuestal' => array(
                                        'label' => 'Ver Programas Presupuestales',
                                        'imageUrl' => Yii::app()->request->baseUrl.'/images/list-icon.png',
                                        'options' => array('class'=>'cButtonColumn'),
                                        'url' => 'Yii::app()->createUrl("ProgramaPresupuestal/admin", array("id_caratula_poa"=>"$data->id_caratula_poa"))',
                                    ),
                                    'listDistribucion' => array(
                                        'label' => 'Ver Distribución por Partida',
                                        'imageUrl' => Yii::app()->request->baseUrl.'/images/money.png',
                                        'options' => array('class'=>'cButtonColumn'),
                                        'url' => 'Yii::app()->createUrl("proyectoInstitucional/distribucionPresupuestal", array("id_caratula_poa"=>"$data->id_caratula_poa"))',
                                    ),
                                ),
		),
	),
)); ?>
