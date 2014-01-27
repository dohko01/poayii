<?php

/**
 * This is the model class for table "tbl_arbol_objetivo".
 *
 * The followings are the available columns in table 'tbl_arbol_objetivo':
 * @property integer $id_arbol_objetivo
 * @property string $definicion_objetivo
 * @property integer $id_programa_presupuestal
 */
class ArbolObjetivo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_arbol_objetivo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_programa_presupuestal', 'numerical', 'integerOnly'=>true),
			array('definicion_objetivo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_arbol_objetivo, definicion_objetivo, id_programa_presupuestal', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_arbol_objetivo' => 'Id Arbol Objetivo',
			'definicion_objetivo' => 'Definicion Objetivo',
			'id_programa_presupuestal' => 'Id Programa Presupuestal',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_arbol_objetivo',$this->id_arbol_objetivo);
		$criteria->compare('definicion_objetivo',$this->definicion_objetivo,true);
		$criteria->compare('id_programa_presupuestal',$this->id_programa_presupuestal);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ArbolObjetivo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getMedios($id = 0) {
            if($id == 0)
                   $id = $this->id_arbol_objetivo;
            $problemas  = Objetivo::model()->findAllByAttributes(array('id_arbol_objetivo'=>$id, 'tipo'=>'medio'));
            return $problemas;
        }
        
        public function getFines($id = 0) {
            if($id == 0)
                   $id = $this->id_arbol_objetivo;
            $problemas  = Objetivo::model()->findAllByAttributes(array('id_arbol_objetivo'=>$id, 'tipo'=>'fin'));
            return $problemas;
        }
}
