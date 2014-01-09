<?php

/**
 * This is the model class for table "tbl_proyecto_institucional".
 *
 * The followings are the available columns in table 'tbl_proyecto_institucional':
 * @property integer $id_proyecto_institucional
 * @property string $nombre_tecnico
 * @property integer $numero_proyecto_estrategico
 * @property string $lider_proyecto
 * @property string $jefe_inmediato
 * @property string $jefe_planeacion
 * @property string $coordinador_grupo_estrategico
 * @property integer $id_actividad_institucional
 * @property integer $id_sub_subfuncion
 * @property integer $id_programa_especial
 * @property integer $id_programa_sectorial
 * @property integer $id_unidad
 * @property integer $id_programa_presupuestario
 * @property integer $id_proyecto_estrategico
 * @property integer $id_politica_publica
 * @property integer $id_proyecto_tipo
 * @property integer $id_tipo_accion
 */
class ProyectoInstitucional extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_proyecto_institucional';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero_proyecto_estrategico, id_actividad_institucional, id_sub_subfuncion, id_programa_especial, id_programa_sectorial, id_unidad, id_programa_presupuestario, id_proyecto_estrategico, id_politica_publica, id_proyecto_tipo, id_tipo_accion', 'numerical', 'integerOnly'=>true),
			array('nombre_tecnico, lider_proyecto, jefe_inmediato, jefe_planeacion, coordinador_grupo_estrategico', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_proyecto_institucional, nombre_tecnico, numero_proyecto_estrategico, lider_proyecto, jefe_inmediato, jefe_planeacion, coordinador_grupo_estrategico, id_actividad_institucional, id_sub_subfuncion, id_programa_especial, id_programa_sectorial, id_unidad, id_programa_presupuestario, id_proyecto_estrategico, id_politica_publica, id_proyecto_tipo, id_tipo_accion', 'safe', 'on'=>'search'),
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
			'id_proyecto_institucional' => 'Id Proyecto Institucional',
			'nombre_tecnico' => 'Nombre Tecnico',
			'numero_proyecto_estrategico' => 'Numero Proyecto Estrategico',
			'lider_proyecto' => 'Lider Proyecto',
			'jefe_inmediato' => 'Jefe Inmediato',
			'jefe_planeacion' => 'Jefe Planeacion',
			'coordinador_grupo_estrategico' => 'Coordinador Grupo Estrategico',
			'id_actividad_institucional' => 'Id Actividad Institucional',
			'id_sub_subfuncion' => 'Id Sub Subfuncion',
			'id_programa_especial' => 'Id Programa Especial',
			'id_programa_sectorial' => 'Id Programa Sectorial',
			'id_unidad' => 'Id Unidad',
			'id_programa_presupuestario' => 'Id Programa Presupuestario',
			'id_proyecto_estrategico' => 'Id Proyecto Estrategico',
			'id_politica_publica' => 'Id Politica Publica',
			'id_proyecto_tipo' => 'Id Proyecto Tipo',
			'id_tipo_accion' => 'Id Tipo Accion',
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

		$criteria->compare('id_proyecto_institucional',$this->id_proyecto_institucional);
		$criteria->compare('nombre_tecnico',$this->nombre_tecnico,true);
		$criteria->compare('numero_proyecto_estrategico',$this->numero_proyecto_estrategico);
		$criteria->compare('lider_proyecto',$this->lider_proyecto,true);
		$criteria->compare('jefe_inmediato',$this->jefe_inmediato,true);
		$criteria->compare('jefe_planeacion',$this->jefe_planeacion,true);
		$criteria->compare('coordinador_grupo_estrategico',$this->coordinador_grupo_estrategico,true);
		$criteria->compare('id_actividad_institucional',$this->id_actividad_institucional);
		$criteria->compare('id_sub_subfuncion',$this->id_sub_subfuncion);
		$criteria->compare('id_programa_especial',$this->id_programa_especial);
		$criteria->compare('id_programa_sectorial',$this->id_programa_sectorial);
		$criteria->compare('id_unidad',$this->id_unidad);
		$criteria->compare('id_programa_presupuestario',$this->id_programa_presupuestario);
		$criteria->compare('id_proyecto_estrategico',$this->id_proyecto_estrategico);
		$criteria->compare('id_politica_publica',$this->id_politica_publica);
		$criteria->compare('id_proyecto_tipo',$this->id_proyecto_tipo);
		$criteria->compare('id_tipo_accion',$this->id_tipo_accion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProyectoInstitucional the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
