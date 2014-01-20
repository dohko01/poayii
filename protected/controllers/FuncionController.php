<?php

class FuncionController extends Controller
{
	public function actionGetAll()
	{
        echo CHtml::tag('option', array('value'=>'empty'), CHtml::encode('Seleccionar'),true);

        if(CHttpRequest::getPost('finalidad')) {
            $data = Funcion::model()->findAll(array(
                    'condition' => 'id_finalidad=:id_finalidad', 
                    'order'     => 'descripcion ASC', 
                    'params'    => array(':id_finalidad'=>CHttpRequest::getPost('finalidad'))
                ));
            $data = CHtml::listData($data, 'id_funcion', 'descripcion');

            foreach($data as $id => $valor) {
                echo CHtml::tag('option', array('value'=>$id), CHtml::encode($valor),true);
            }
        }
	}
    
}