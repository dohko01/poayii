<?php

/**
 * This is the model class for table "tbl_indicador".
 *
 * The followings are the available columns in table 'tbl_indicador':
 * @property integer $id_indicador
 * @property string $descripcion_objetivo
 * @property double $meta_indicador
 * @property double $tercer_trimestre
 * @property double $cuarto_trimestre
 * @property double $primer_trimestre
 * @property integer $id_parent_indicador
 * @property integer $anio_linea_base
 * @property integer $id_variable_denominador
 * @property double $total
 * @property integer $id_objetivo_indicador
 * @property double $segundo_trimestre
 * @property string $interpretacion
 * @property string $linea_base
 * @property integer $id_proyecto_institucional
 * @property integer $id_unidad_medida
 * @property integer $id_formula_indicador
 * @property integer $id_tipo_indicador
 * @property integer $id_frecuencia
 * @property integer $id_comportamiento
 * @property integer $id_dimension_indicador
 * @property integer $id_variable_numerador
 */
class Indicador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_indicador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_parent_indicador, anio_linea_base, id_variable_denominador, id_objetivo_indicador, id_proyecto_institucional, id_unidad_medida, id_formula_indicador, id_tipo_indicador, id_frecuencia, id_comportamiento, id_dimension_indicador, id_variable_numerador', 'numerical', 'integerOnly'=>true),
			array('meta_indicador, tercer_trimestre, cuarto_trimestre, primer_trimestre, total, segundo_trimestre', 'numerical'),
			array('linea_base', 'length', 'max'=>255),
			array('descripcion_objetivo, interpretacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_indicador, descripcion_objetivo, meta_indicador, tercer_trimestre, cuarto_trimestre, primer_trimestre, id_parent_indicador, anio_linea_base, id_variable_denominador, total, id_objetivo_indicador, segundo_trimestre, interpretacion, linea_base, id_proyecto_institucional, id_unidad_medida, id_formula_indicador, id_tipo_indicador, id_frecuencia, id_comportamiento, id_dimension_indicador, id_variable_numerador', 'safe', 'on'=>'search'),
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
			'id_indicador' => 'Id Indicador',
			'descripcion_objetivo' => 'Descripcion Objetivo',
			'meta_indicador' => 'Meta Indicador',
			'tercer_trimestre' => 'Tercer Trimestre',
			'cuarto_trimestre' => 'Cuarto Trimestre',
			'primer_trimestre' => 'Primer Trimestre',
			'id_parent_indicador' => 'Id Parent Indicador',
			'anio_linea_base' => 'Anio Linea Base',
			'id_variable_denominador' => 'Id Variable Denominador',
			'total' => 'Total',
			'id_objetivo_indicador' => 'Id Objetivo Indicador',
			'segundo_trimestre' => 'Segundo Trimestre',
			'interpretacion' => 'Interpretacion',
			'linea_base' => 'Linea Base',
			'id_proyecto_institucional' => 'Id Proyecto Institucional',
			'id_unidad_medida' => 'Id Unidad Medida',
			'id_formula_indicador' => 'Id Formula Indicador',
			'id_tipo_indicador' => 'Id Tipo Indicador',
			'id_frecuencia' => 'Id Frecuencia',
			'id_comportamiento' => 'Id Comportamiento',
			'id_dimension_indicador' => 'Id Dimension Indicador',
			'id_variable_numerador' => 'Id Variable Numerador',
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

		$criteria->compare('id_indicador',$this->id_indicador);
		$criteria->compare('descripcion_objetivo',$this->descripcion_objetivo,true);
		$criteria->compare('meta_indicador',$this->meta_indicador);
		$criteria->compare('tercer_trimestre',$this->tercer_trimestre);
		$criteria->compare('cuarto_trimestre',$this->cuarto_trimestre);
		$criteria->compare('primer_trimestre',$this->primer_trimestre);
		$criteria->compare('id_parent_indicador',$this->id_parent_indicador);
		$criteria->compare('anio_linea_base',$this->anio_linea_base);
		$criteria->compare('id_variable_denominador',$this->id_variable_denominador);
		$criteria->compare('total',$this->total);
		$criteria->compare('id_objetivo_indicador',$this->id_objetivo_indicador);
		$criteria->compare('segundo_trimestre',$this->segundo_trimestre);
		$criteria->compare('interpretacion',$this->interpretacion,true);
		$criteria->compare('linea_base',$this->linea_base,true);
		$criteria->compare('id_proyecto_institucional',$this->id_proyecto_institucional);
		$criteria->compare('id_unidad_medida',$this->id_unidad_medida);
		$criteria->compare('id_formula_indicador',$this->id_formula_indicador);
		$criteria->compare('id_tipo_indicador',$this->id_tipo_indicador);
		$criteria->compare('id_frecuencia',$this->id_frecuencia);
		$criteria->compare('id_comportamiento',$this->id_comportamiento);
		$criteria->compare('id_dimension_indicador',$this->id_dimension_indicador);
		$criteria->compare('id_variable_numerador',$this->id_variable_numerador);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Indicador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
