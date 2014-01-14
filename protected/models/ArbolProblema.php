<?php

/**
 * This is the model class for table "tbl_arbol_problema".
 *
 * The followings are the available columns in table 'tbl_arbol_problema':
 * @property integer $id_arbol_problematica
 * @property string $definicion_problematica
 * @property integer $id_programa_presupuestal
 *
 * The followings are the available model relations:
 * @property TblProblematica[] $tblProblematicas
 * @property TblProgramaPresupuestal $idProgramaPresupuestal
 */
class ArbolProblema extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_arbol_problema';
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
			array('definicion_problematica', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_arbol_problematica, definicion_problematica, id_programa_presupuestal', 'safe', 'on'=>'search'),
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
			'tblProblematicas' => array(self::HAS_MANY, 'TblProblematica', 'id_arbol_problematica'),
			'idProgramaPresupuestal' => array(self::BELONGS_TO, 'TblProgramaPresupuestal', 'id_programa_presupuestal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_arbol_problematica' => 'Id Arbol Problematica',
			'definicion_problematica' => 'Definicion Problematica',
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

		$criteria->compare('id_arbol_problematica',$this->id_arbol_problematica);
		$criteria->compare('definicion_problematica',$this->definicion_problematica,true);
		$criteria->compare('id_programa_presupuestal',$this->id_programa_presupuestal);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ArbolProblema the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
