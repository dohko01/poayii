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
 * @property integer $id_proyecto_estrategico
 * @property integer $id_proyecto_tipo
 * @property integer $id_tipo_accion
 * @property integer $id_caratula_poa
 * @property integer $id_cobertura
 *
 * The followings are the available model relations:
 * @property CaratulaPoa $CaratulaPoa
 * @property ActividadInstitucional $ActividadInstitucional
 * @property ProgramaEspecial $ProgramaEspecial
 * @property ProyectoEstrategico $ProyectoEstrategico
 * @property ProyectoTipo $ProyectoTipo
 * @property SubSubfuncion $SubSubfuncion
 * @property TipoAccion $TipoAccion
 * @property Cobertura $Cobertura
 * @property Beneficiario[] $Beneficiarios
 * @property Indicador[] $Indicadores
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
			array('numero_proyecto_estrategico, id_actividad_institucional, id_sub_subfuncion, id_programa_especial, id_proyecto_estrategico, id_proyecto_tipo, id_tipo_accion, id_caratula_poa, id_cobertura', 'numerical', 'integerOnly'=>true),
			array('nombre_tecnico, lider_proyecto, jefe_inmediato, jefe_planeacion, coordinador_grupo_estrategico', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_proyecto_institucional, nombre_tecnico, numero_proyecto_estrategico, lider_proyecto, jefe_inmediato, jefe_planeacion, coordinador_grupo_estrategico, id_actividad_institucional, id_sub_subfuncion, id_programa_especial, id_proyecto_estrategico, id_proyecto_tipo, id_tipo_accion, id_caratula_poa, id_cobertura', 'safe', 'on'=>'search'),
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
			'CaratulaPoa' => array(self::BELONGS_TO, 'CaratulaPoa', 'id_caratula_poa'),
			'ActividadInstitucional' => array(self::BELONGS_TO, 'ActividadInstitucional', 'id_actividad_institucional'),
			'ProgramaEspecial' => array(self::BELONGS_TO, 'ProgramaEspecial', 'id_programa_especial'),
			'ProyectoEstrategico' => array(self::BELONGS_TO, 'ProyectoEstrategico', 'id_proyecto_estrategico'),
			'ProyectoTipo' => array(self::BELONGS_TO, 'ProyectoTipo', 'id_proyecto_tipo'),
			'SubSubfuncion' => array(self::BELONGS_TO, 'SubSubfuncion', 'id_sub_subfuncion'),
			'TipoAccion' => array(self::BELONGS_TO, 'TipoAccion', 'id_tipo_accion'),
            'Cobertura' => array(self::BELONGS_TO, 'Cobertura', 'id_cobertura'),
			'Beneficiarios' => array(self::HAS_MANY, 'Beneficiario', 'id_proyecto_institucional'),
			'Indicadors' => array(self::HAS_MANY, 'Indicador', 'id_proyecto_institucional'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_proyecto_institucional' => 'Proyecto Institucional',
			'nombre_tecnico' => 'Nombre Técnico',
			'numero_proyecto_estrategico' => 'Número de Proyecto Estrategico',
			'lider_proyecto' => 'Lider del Proyecto',
			'jefe_inmediato' => 'Jefe Inmediato',
			'jefe_planeacion' => 'Jefe de Planeación',
			'coordinador_grupo_estrategico' => 'Coordinador del Grupo Estrategico',
			'id_actividad_institucional' => 'Actividad Institucional',
			'id_sub_subfuncion' => 'SubSubfunción',
			'id_programa_especial' => 'Programa Especial',
			'id_proyecto_estrategico' => 'Proyecto Estrategico',
			'id_proyecto_tipo' => 'Tipo de Proyecto',
            'id_cobertura' => 'Cobertura',
			'id_tipo_accion' => 'Tipo de Acción',
			'id_caratula_poa' => 'Caratula Poa',
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
		$criteria->compare('LOWER(nombre_tecnico)',strtolower($this->nombre_tecnico),true);
		$criteria->compare('numero_proyecto_estrategico',$this->numero_proyecto_estrategico);
		$criteria->compare('LOWER(lider_proyecto)',strtolower($this->lider_proyecto),true);
		$criteria->compare('LOWER(jefe_inmediato)',strtolower($this->jefe_inmediato),true);
		$criteria->compare('LOWER(jefe_planeacion)',strtolower($this->jefe_planeacion),true);
		$criteria->compare('LOWER(coordinador_grupo_estrategico)',strtolower($this->coordinador_grupo_estrategico),true);
		$criteria->compare('id_actividad_institucional',$this->id_actividad_institucional);
		$criteria->compare('id_sub_subfuncion',$this->id_sub_subfuncion);
		$criteria->compare('id_programa_especial',$this->id_programa_especial);
		$criteria->compare('id_proyecto_estrategico',$this->id_proyecto_estrategico);
		$criteria->compare('id_proyecto_tipo',$this->id_proyecto_tipo);
        $criteria->compare('id_cobertura',$this->id_cobertura);
		$criteria->compare('id_tipo_accion',$this->id_tipo_accion);
		$criteria->compare('id_caratula_poa',$this->id_caratula_poa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'pagination'=>array('pageSize'=>20)
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
