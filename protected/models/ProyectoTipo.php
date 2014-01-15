<?php

/**
 * This is the model class for table "tblc_proyecto_tipo".
 *
 * The followings are the available columns in table 'tblc_proyecto_tipo':
 * @property integer $id_proyecto_tipo
 * @property string $clave
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property ProyectoInstitucional[] $ProyectosInstitucionales
 */
class ProyectoTipo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblc_proyecto_tipo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clave', 'length', 'max'=>5),
			array('descripcion', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_proyecto_tipo, clave, descripcion', 'safe', 'on'=>'search'),
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
			'ProyectosInstitucionales' => array(self::HAS_MANY, 'ProyectoInstitucional', 'id_proyecto_tipo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_proyecto_tipo' => 'Tipo de Proyecto ',
			'clave' => 'Clave',
			'descripcion' => 'Descripción',
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

		$criteria->compare('id_proyecto_tipo',$this->id_proyecto_tipo);
		$criteria->compare('LOWER(clave)',strtolower($this->clave),true);
		$criteria->compare('LOWER(descripcion)',strtolower($this->descripcion),true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'pagination'=>array('pageSize'=>20)
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProyectoTipo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
