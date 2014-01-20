<?php

class SubSubFuncionController extends Controller
{
	public function actionGetAll()
	{
        echo CHtml::tag('option', array('value'=>'empty'), CHtml::encode('Seleccionar'),true);
		
        if(CHttpRequest::getPost('subfuncion')) {
            $data = SubSubFuncion::model()->findAll(array(
                    'condition' => 'id_subfuncion=:id_subfuncion', 
                    'order'     => 'descripcion ASC', 
                    'params'    => array(':id_subfuncion'=>CHttpRequest::getPost('subfuncion'))
                ));
            $data = CHtml::listData($data, 'id_sub_subfuncion', 'descripcion');

            foreach($data as $id => $valor) {
                echo CHtml::tag('option', array('value'=>$id), CHtml::encode($valor),true);
            }
        }
	}
    
}