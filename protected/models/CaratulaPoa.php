<?php

/**
 * This is the model class for table "tbl_caratula_poa".
 *
 * The followings are the available columns in table 'tbl_caratula_poa':
 * @property integer $id_caratula_poa
 * @property integer $id_programa_presupuestario
 * @property integer $id_unidad
 * @property integer $id_politica_publica
 * @property integer $id_programa_sectorial
 * @property integer $id_usuario
 *
 * The followings are the available model relations:
 * @property TblcProgramaPresupuestario $idProgramaPresupuestario
 * @property TblcUnidad $idUnidad
 * @property TblcPoliticaPublica $idPoliticaPublica
 * @property TblcProgramaSectorial $idProgramaSectorial
 * @property TblUsuario $idUsuario
 * @property TblProgramaPresupuestal[] $tblProgramaPresupuestals
 * @property TblProyectoInstitucional[] $tblProyectoInstitucionals
 */
class CaratulaPoa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_caratula_poa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_programa_presupuestario, id_unidad, id_politica_publica, id_programa_sectorial, id_usuario', 'numerical', 'integerOnly'=>true),
                        array('id_programa_presupuestario','required', 'message'=>'Seleccionar un programa presupuestario'),
                        array('id_programa_sectorial','required', 'message'=>'Seleccionar un programa sectorial'),
                        array('id_unidad','required', 'message'=>'Seleccionar una Entidad, Ente publico y Unidad'),
                        array('id_politica_publica','required', 'message'=>'Seleccionar un Eje, Tema y Politica Publica'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_caratula_poa, id_programa_presupuestario, id_unidad, id_politica_publica, id_programa_sectorial, id_usuario', 'safe', 'on'=>'search'),
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
			'idProgramaPresupuestario' => array(self::BELONGS_TO, 'ProgramaPresupuestario', 'id_programa_presupuestario'),
			'idUnidad' => array(self::BELONGS_TO, 'Unidad', 'id_unidad'),
			'idPoliticaPublica' => array(self::BELONGS_TO, 'PoliticaPublica', 'id_politica_publica'),
			'idProgramaSectorial' => array(self::BELONGS_TO, 'ProgramaSectorial', 'id_programa_sectorial'),
			'idUsuario' => array(self::BELONGS_TO, 'Usuario', 'id_usuario'),
			'tblProgramaPresupuestals' => array(self::HAS_MANY, 'ProgramaPresupuestal', 'id_caratula_poa'),
			'tblProyectoInstitucionals' => array(self::HAS_MANY, 'ProyectoInstitucional', 'id_caratula_poa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_caratula_poa' => 'Caratula Poa',
			'id_programa_presupuestario' => 'Programa Presupuestario',
			'id_unidad' => 'Unidad',
			'id_politica_publica' => 'Politica Publica',
			'id_programa_sectorial' => 'Programa Sectorial',
			'id_usuario' => 'Usuario',
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

		$criteria->compare('id_caratula_poa',$this->id_caratula_poa);
		$criteria->compare('id_programa_presupuestario',$this->id_programa_presupuestario);
		$criteria->compare('id_unidad',$this->id_unidad);
		$criteria->compare('id_politica_publica',$this->id_politica_publica);
		$criteria->compare('id_programa_sectorial',$this->id_programa_sectorial);
		$criteria->compare('id_usuario',$this->id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CaratulaPoa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
