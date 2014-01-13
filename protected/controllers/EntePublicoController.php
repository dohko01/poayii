<?php

class EntePublicoController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        
        public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('getEntesPublicos'),
				//'users'=>array('*'),
				'expression'=>Yii::app()->params['permiso_acceso'],
			),/*
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('@'),
				'expression'=>'$user->id == 1 && $user->tipoUsuario == 1',
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('admin'),
				'expression'=>'$user->id == 1 && $user->tipoUsuario == 1',
			),*/
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
        public function actionGetEntesPublicos()
	{
//		$datosPost = array();
//		foreach($_POST as $key => $value)
//		{
//			$datosPost[] = $value;
//		}
		
		$data = EntePublico::model()->findAll('"id_entidad"=:id_entidad',
												array(':id_entidad'=>(int)$_POST['id_entidad'])
												);
		$data = CHtml::listData($data,'id_ente_publico','nombre');
		
		echo CHtml::tag('option', array('value'=>'empty'),CHtml::encode('Seleccionar'),true);
		foreach($data as $value => $name)
		{
			echo CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
		}
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}*/
	
}