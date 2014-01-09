<?php

/**
 * This is the model class for table "tbl_beneficiario".
 *
 * The followings are the available columns in table 'tbl_beneficiario':
 * @property integer $id_beneficiario
 * @property double $total
 * @property integer $genero
 * @property double $urbano
 * @property double $rural
 * @property double $mestizo
 * @property double $indigena
 * @property double $inmigrante
 * @property double $otros
 * @property double $marginacion_muy_alta
 * @property double $marginacion_alta
 * @property double $marginacion_media
 * @property double $marginacion_baja
 * @property double $marginacion_muy_baja
 * @property integer $id_proyecto_institucional
 * @property integer $id_unidad_beneficiario
 */
class Beneficiario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_beneficiario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('genero, id_proyecto_institucional, id_unidad_beneficiario', 'numerical', 'integerOnly'=>true),
			array('total, urbano, rural, mestizo, indigena, inmigrante, otros, marginacion_muy_alta, marginacion_alta, marginacion_media, marginacion_baja, marginacion_muy_baja', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_beneficiario, total, genero, urbano, rural, mestizo, indigena, inmigrante, otros, marginacion_muy_alta, marginacion_alta, marginacion_media, marginacion_baja, marginacion_muy_baja, id_proyecto_institucional, id_unidad_beneficiario', 'safe', 'on'=>'search'),
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
			'id_beneficiario' => 'Id Beneficiario',
			'total' => 'Total',
			'genero' => 'Genero',
			'urbano' => 'Urbano',
			'rural' => 'Rural',
			'mestizo' => 'Mestizo',
			'indigena' => 'Indigena',
			'inmigrante' => 'Inmigrante',
			'otros' => 'Otros',
			'marginacion_muy_alta' => 'Marginacion Muy Alta',
			'marginacion_alta' => 'Marginacion Alta',
			'marginacion_media' => 'Marginacion Media',
			'marginacion_baja' => 'Marginacion Baja',
			'marginacion_muy_baja' => 'Marginacion Muy Baja',
			'id_proyecto_institucional' => 'Id Proyecto Institucional',
			'id_unidad_beneficiario' => 'Id Unidad Beneficiario',
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

		$criteria->compare('id_beneficiario',$this->id_beneficiario);
		$criteria->compare('total',$this->total);
		$criteria->compare('genero',$this->genero);
		$criteria->compare('urbano',$this->urbano);
		$criteria->compare('rural',$this->rural);
		$criteria->compare('mestizo',$this->mestizo);
		$criteria->compare('indigena',$this->indigena);
		$criteria->compare('inmigrante',$this->inmigrante);
		$criteria->compare('otros',$this->otros);
		$criteria->compare('marginacion_muy_alta',$this->marginacion_muy_alta);
		$criteria->compare('marginacion_alta',$this->marginacion_alta);
		$criteria->compare('marginacion_media',$this->marginacion_media);
		$criteria->compare('marginacion_baja',$this->marginacion_baja);
		$criteria->compare('marginacion_muy_baja',$this->marginacion_muy_baja);
		$criteria->compare('id_proyecto_institucional',$this->id_proyecto_institucional);
		$criteria->compare('id_unidad_beneficiario',$this->id_unidad_beneficiario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Beneficiario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
