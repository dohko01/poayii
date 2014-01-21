<?php

/**
 * This is the model class for table "tbl_objetivo_indicador".
 *
 * The followings are the available columns in table 'tbl_objetivo_indicador':
 * @property integer $id_objetivo_indicador
 * @property string $medio_verificacion
 * @property string $supuestos
 * @property string $tipo
 * @property integer $id_programa_presupuestal
 * @property integer $id_objetivo
 * @property integer $id_ambito
 * @property string $objetivo
 *
 * The followings are the available model relations:
 * @property TblIndicador[] $tblIndicadors
 * @property TblObjetivo $idObjetivo
 * @property TblProgramaPresupuestal $idProgramaPresupuestal
 * @property TblcAmbito $idAmbito
 */
class ObjetivoIndicador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_objetivo_indicador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_programa_presupuestal, id_objetivo, id_ambito', 'numerical', 'integerOnly'=>true),
			array('medio_verificacion, supuestos', 'length', 'max'=>255),
			array('tipo, objetivo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_objetivo_indicador, medio_verificacion, supuestos, tipo, id_programa_presupuestal, id_objetivo, id_ambito, objetivo', 'safe', 'on'=>'search'),
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
			'tblIndicadors' => array(self::HAS_MANY, 'TblIndicador', 'id_objetivo_indicador'),
			'idObjetivo' => array(self::BELONGS_TO, 'TblObjetivo', 'id_objetivo'),
			'idProgramaPresupuestal' => array(self::BELONGS_TO, 'TblProgramaPresupuestal', 'id_programa_presupuestal'),
			'idAmbito' => array(self::BELONGS_TO, 'TblcAmbito', 'id_ambito'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_objetivo_indicador' => 'Id Objetivo Indicador',
			'medio_verificacion' => 'Medio Verificacion',
			'supuestos' => 'Supuestos',
			'tipo' => 'Tipo',
			'id_programa_presupuestal' => 'Id Programa Presupuestal',
			'id_objetivo' => 'Id Objetivo',
			'id_ambito' => 'Ambito',
			'objetivo' => 'Objetivo',
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

		$criteria->compare('id_objetivo_indicador',$this->id_objetivo_indicador);
		$criteria->compare('medio_verificacion',$this->medio_verificacion,true);
		$criteria->compare('supuestos',$this->supuestos,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('id_programa_presupuestal',$this->id_programa_presupuestal);
		$criteria->compare('id_objetivo',$this->id_objetivo);
		$criteria->compare('id_ambito',$this->id_ambito);
		$criteria->compare('objetivo',$this->objetivo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ObjetivoIndicador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
