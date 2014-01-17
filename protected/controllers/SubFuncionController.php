<?php

class SubFuncionController extends Controller
{
	public function actionGetAll()
	{
		$data = SubFuncion::model()->findAll(array(
                'condition' => 'id_funcion=:id_funcion', 
                'order'     => 'descripcion ASC', 
                'params'    => array(':id_funcion'=>CHttpRequest::getPost('id_funcion'))
            ));
		$data = CHtml::listData($data, 'id_subfuncion', 'descripcion');
		
		echo CHtml::tag('option', array('value'=>'empty'), CHtml::encode('Seleccionar'),true);
        
		foreach($data as $id => $valor) {
			echo CHtml::tag('option', array('value'=>$id), CHtml::encode($valor),true);
		}
	}

}