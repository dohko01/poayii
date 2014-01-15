<?php

/**
 * This is the model class for table "tblc_subfuncion".
 *
 * The followings are the available columns in table 'tblc_subfuncion':
 * @property integer $id_subfuncion
 * @property string $descripcion
 * @property integer $id_funcion
 *
 * The followings are the available model relations:
 * @property Funcion $Funcion
 * @property SubSubfuncion[] $SubSubfunciones
 */
class Subfuncion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblc_subfuncion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_funcion', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_subfuncion, descripcion, id_funcion', 'safe', 'on'=>'search'),
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
			'Funcion' => array(self::BELONGS_TO, 'Funcion', 'id_funcion'),
			'SubSubfunciones' => array(self::HAS_MANY, 'SubSubfuncion', 'id_subfuncion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_subfuncion' => 'Subfunción',
			'descripcion' => 'Descripción',
			'id_funcion' => 'Función',
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

		$criteria->compare('id_subfuncion',$this->id_subfuncion);
		$criteria->compare('LOWER(descripcion)',strtolower($this->descripcion),true);
		$criteria->compare('id_funcion',$this->id_funcion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'pagination'=>array('pageSize'=>20)
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Subfuncion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
