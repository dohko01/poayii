<?php

/**
 * This is the model class for table "tblc_objetivo_pnd".
 *
 * The followings are the available columns in table 'tblc_objetivo_pnd':
 * @property integer $id_objetivo_pnd
 * @property string $descripcion
 * @property integer $id_meta_nacional
 *
 * The followings are the available model relations:
 * @property TblProgramaPresupuestal[] $tblProgramaPresupuestals
 * @property TblcMetaNacional $idMetaNacional
 */
class ObjetivoPnd extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblc_objetivo_pnd';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_meta_nacional', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_objetivo_pnd, descripcion, id_meta_nacional', 'safe', 'on'=>'search'),
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
			'tblProgramaPresupuestals' => array(self::HAS_MANY, 'TblProgramaPresupuestal', 'id_objetivo_pnd'),
			'idMetaNacional' => array(self::BELONGS_TO, 'TblcMetaNacional', 'id_meta_nacional'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_objetivo_pnd' => 'Id Objetivo Pnd',
			'descripcion' => 'Descripcion',
			'id_meta_nacional' => 'Id Meta Nacional',
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

		$criteria->compare('id_objetivo_pnd',$this->id_objetivo_pnd);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('id_meta_nacional',$this->id_meta_nacional);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ObjetivoPnd the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
