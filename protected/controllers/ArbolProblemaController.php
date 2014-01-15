<?php

class ArbolProblemaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * Titulo singular para breadcrumb y encabezado
	 *
	 * @var string
	 */
	public $title_sin = 'Arbol de Problemas y Objetivos';

	/**
	 * Titulo plural para breadcrumb y encabezado
	 *     
	 * @var string 
	 */
	public $title_plu = 'ArbolProblema';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'expression'=>Yii::app()->params['permiso_acceso'],
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'expression'=>Yii::app()->params['permiso_acceso'],
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->pageTitle = Yii::app()->name.' - '.$this->title_sin.' - Ver';
        
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$this->pageTitle = Yii::app()->name.' - '.$this->title_sin.' - Crear';
        
		$model = new ArbolProblema;
                $modelArbolObjetivo = new ArbolObjetivo;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                $validate = true;

		if(isset($_POST['ArbolProblema']))
		{
			$model->attributes=$_POST['ArbolProblema'];
			if($model->save())
                        {
                            if(!empty($_POST['causas']))
                            {
                                $_POST['Problematica']['id_arbol_problematica'] = $model->id_arbol_problematica;
                                $modelProblematica = new Problematica;
                                $modelProblematica->insertCausas($_POST);
                            }
                            
                            if(!empty($_POST['efectos']))
                            {
                                $_POST['Problematica']['id_arbol_problematica'] = $model->id_arbol_problematica;
                                $modelProblematica = new Problematica;
                                $modelProblematica->insertEfectos($_POST);
                            }
                            //$this->redirect(array('Problematica/create','id_arbol_problema'=>$model->id_arbol_problematica));
                        }else{
                            $validate = false;
                        }
		}else{
                    $validate = false;
                }
                
                if(isset($_POST['ArbolObjetivo']))
		{
			$modelArbolObjetivo->attributes=$_POST['ArbolObjetivo'];
			if($modelArbolObjetivo->save())
                        {
                            if(!empty($_POST['medios']))
                            {
                                $_POST['Objetivo']['id_arbol_objetivo'] = $modelArbolObjetivo->id_arbol_objetivo;
                                $modelObjetivo = new Objetivo;
                                $modelObjetivo->insertMedios($_POST);
                            }
                            
                            if(!empty($_POST['fines']))
                            {
                                $_POST['Objetivo']['id_arbol_objetivo'] = $modelArbolObjetivo->id_arbol_objetivo;
                                $modelObjetivo = new Objetivo;
                                $modelObjetivo->insertFines($_POST);
                            }
                            //$this->redirect(array('Problematica/create','id_arbol_problema'=>$model->id_arbol_problematica));
                        }else{
                            $validate = false;
                        }
		}else{
                    $validate = false;
                }
                
                if($validate){
                    $this->redirect(array('objetivoIndicador/create','id_programa_presupuestal'=>$model->id_programa_presupuestal));
                }

		$this->render('create',array(
			'model'=>$model,
                        'modelArbolObjetivo' => $modelArbolObjetivo,
                        'id_programa_presupuestal'=>$_GET['id_programa_presupuestal'],
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$this->pageTitle = Yii::app()->name.' - '.$this->title_sin.' - Actualizar';
        
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ArbolProblema']))
		{
			$model->attributes=$_POST['ArbolProblema'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_arbol_problematica));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->pageTitle = Yii::app()->name.' - '.$this->title_sin.' - Eliminar';
        
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->pageTitle = Yii::app()->name.' - '.$this->title_sin.' - Inicio';
        
		$dataProvider=new CActiveDataProvider('ArbolProblema');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->pageTitle = Yii::app()->name.' - '.$this->title_sin.' - Administración';
        
		$model=new ArbolProblema('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ArbolProblema']))
			$model->attributes=$_GET['ArbolProblema'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ArbolProblema the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ArbolProblema::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'La pagina solicitada no existe.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ArbolProblema $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='arbol-problema-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
