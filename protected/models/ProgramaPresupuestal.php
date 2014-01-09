<?php

/**
 * This is the model class for table "tbl_programa_presupuestal".
 *
 * The followings are the available columns in table 'tbl_programa_presupuestal':
 * @property integer $id_programa_presupuestal
 * @property string $nombre_responsable_unidad
 * @property string $email_responsable_unidad
 * @property string $telefono_responsable_unidad
 * @property integer $anio_inicio
 * @property integer $anio_termino
 * @property string $resultados_esperados
 * @property string $justificacion
 * @property double $cuantificacion_area_enfoque_potencial
 * @property string $area_enfoque_objetivo
 * @property double $cuantificacion_area_enfoque_objetivo
 * @property string $area_enfoque_potencial
 * @property integer $id_programa_presupuestario
 * @property integer $id_unidad
 * @property integer $id_politica_publica
 * @property integer $id_programa_sectorial
 * @property integer $id_objetivo_pnd
 * @property integer $id_objetivo_milenio
 * @property integer $id_modalidad
 */
class ProgramaPresupuestal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_programa_presupuestal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('anio_inicio, anio_termino, id_programa_presupuestario, id_unidad, id_politica_publica, id_programa_sectorial, id_objetivo_pnd, id_objetivo_milenio, id_modalidad', 'numerical', 'integerOnly'=>true),
			array('cuantificacion_area_enfoque_potencial, cuantificacion_area_enfoque_objetivo', 'numerical'),
			array('nombre_responsable_unidad, email_responsable_unidad, telefono_responsable_unidad', 'length', 'max'=>255),
			array('resultados_esperados, justificacion, area_enfoque_objetivo, area_enfoque_potencial', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_programa_presupuestal, nombre_responsable_unidad, email_responsable_unidad, telefono_responsable_unidad, anio_inicio, anio_termino, resultados_esperados, justificacion, cuantificacion_area_enfoque_potencial, area_enfoque_objetivo, cuantificacion_area_enfoque_objetivo, area_enfoque_potencial, id_programa_presupuestario, id_unidad, id_politica_publica, id_programa_sectorial, id_objetivo_pnd, id_objetivo_milenio, id_modalidad', 'safe', 'on'=>'search'),
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
			'id_programa_presupuestal' => 'Id Programa Presupuestal',
			'nombre_responsable_unidad' => 'Nombre Responsable Unidad',
			'email_responsable_unidad' => 'Email Responsable Unidad',
			'telefono_responsable_unidad' => 'Telefono Responsable Unidad',
			'anio_inicio' => 'Anio Inicio',
			'anio_termino' => 'Anio Termino',
			'resultados_esperados' => 'Resultados Esperados',
			'justificacion' => 'Justificacion',
			'cuantificacion_area_enfoque_potencial' => 'Cuantificacion Area Enfoque Potencial',
			'area_enfoque_objetivo' => 'Area Enfoque Objetivo',
			'cuantificacion_area_enfoque_objetivo' => 'Cuantificacion Area Enfoque Objetivo',
			'area_enfoque_potencial' => 'Area Enfoque Potencial',
			'id_programa_presupuestario' => 'Id Programa Presupuestario',
			'id_unidad' => 'Id Unidad',
			'id_politica_publica' => 'Id Politica Publica',
			'id_programa_sectorial' => 'Id Programa Sectorial',
			'id_objetivo_pnd' => 'Id Objetivo Pnd',
			'id_objetivo_milenio' => 'Id Objetivo Milenio',
			'id_modalidad' => 'Id Modalidad',
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

		$criteria->compare('id_programa_presupuestal',$this->id_programa_presupuestal);
		$criteria->compare('nombre_responsable_unidad',$this->nombre_responsable_unidad,true);
		$criteria->compare('email_responsable_unidad',$this->email_responsable_unidad,true);
		$criteria->compare('telefono_responsable_unidad',$this->telefono_responsable_unidad,true);
		$criteria->compare('anio_inicio',$this->anio_inicio);
		$criteria->compare('anio_termino',$this->anio_termino);
		$criteria->compare('resultados_esperados',$this->resultados_esperados,true);
		$criteria->compare('justificacion',$this->justificacion,true);
		$criteria->compare('cuantificacion_area_enfoque_potencial',$this->cuantificacion_area_enfoque_potencial);
		$criteria->compare('area_enfoque_objetivo',$this->area_enfoque_objetivo,true);
		$criteria->compare('cuantificacion_area_enfoque_objetivo',$this->cuantificacion_area_enfoque_objetivo);
		$criteria->compare('area_enfoque_potencial',$this->area_enfoque_potencial,true);
		$criteria->compare('id_programa_presupuestario',$this->id_programa_presupuestario);
		$criteria->compare('id_unidad',$this->id_unidad);
		$criteria->compare('id_politica_publica',$this->id_politica_publica);
		$criteria->compare('id_programa_sectorial',$this->id_programa_sectorial);
		$criteria->compare('id_objetivo_pnd',$this->id_objetivo_pnd);
		$criteria->compare('id_objetivo_milenio',$this->id_objetivo_milenio);
		$criteria->compare('id_modalidad',$this->id_modalidad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProgramaPresupuestal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
