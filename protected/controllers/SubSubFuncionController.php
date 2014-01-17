<?php

class SubSubFuncionController extends Controller
{
	public function actionGetAll()
	{
		$data = SubSubFuncion::model()->findAll(array(
                'condition' => 'id_subfuncion=:id_subfuncion', 
                'order'     => 'descripcion ASC', 
                'params'    => array(':id_subfuncion'=>CHttpRequest::getPost('id_subfuncion'))
            ));
		$data = CHtml::listData($data, 'id_sub_subfuncion', 'descripcion');
		
		echo CHtml::tag('option', array('value'=>'empty'), CHtml::encode('Seleccionar'),true);
        
		foreach($data as $id => $valor) {
			echo CHtml::tag('option', array('value'=>$id), CHtml::encode($valor),true);
		}
	}
    
}