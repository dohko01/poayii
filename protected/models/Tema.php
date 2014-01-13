<?php

/**
 * This is the model class for table "tblc_tema".
 *
 * The followings are the available columns in table 'tblc_tema':
 * @property integer $id_tema
 * @property string $nombre
 * @property integer $id_eje
 * @property string $clave
 *
 * The followings are the available model relations:
 * @property TblcEje $idEje
 * @property TblcPoliticaPublica[] $tblcPoliticaPublicas
 */
class Tema extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblc_tema';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_eje', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>255),
			array('clave', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tema, nombre, id_eje, clave', 'safe', 'on'=>'search'),
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
			'idEje' => array(self::BELONGS_TO, 'TblcEje', 'id_eje'),
			'tblcPoliticaPublicas' => array(self::HAS_MANY, 'TblcPoliticaPublica', 'id_tema'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tema' => 'Id Tema',
			'nombre' => 'Nombre',
			'id_eje' => 'Id Eje',
			'clave' => 'Clave',
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

		$criteria->compare('id_tema',$this->id_tema);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('id_eje',$this->id_eje);
		$criteria->compare('clave',$this->clave,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tema the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
