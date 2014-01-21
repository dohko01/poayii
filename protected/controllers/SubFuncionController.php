<?php

class SubFuncionController extends Controller
{
	public function actionGetAll()
	{
        echo CHtml::tag('option', array('value'=>'empty'), CHtml::encode('Seleccionar'),true);
        
        if(CHttpRequest::getPost('funcion')) {
            $data = SubFuncion::model()->findAll(array(
                    'condition' => 'id_funcion=:id_funcion', 
                    'order'     => 'descripcion ASC', 
                    'params'    => array(':id_funcion'=>CHttpRequest::getPost('funcion'))
                ));
            $data = CHtml::listData($data, 'id_subfuncion', 'descripcion');

            foreach($data as $id => $valor) {
                echo CHtml::tag('option', array('value'=>$id), CHtml::encode($valor),true);
            }
        }
	}

}