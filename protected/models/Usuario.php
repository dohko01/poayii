<?php

/**
 * This is the model class for table "tbl_usuario".
 *
 * The followings are the available columns in table 'tbl_usuario':
 * @property integer $id_usuario
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $email
 * @property string $usuario
 * @property string $pw
 * @property string $fecha_nacimiento
 * @property integer $id_tipo_usuario
 *
 * The followings are the available model relations:
 * @property TblCaratulaPoa[] $tblCaratulaPoas
 * @property TblcTipoUsuario $idTipoUsuario
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tipo_usuario', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido_paterno, apellido_materno, email, usuario, pw', 'length', 'max'=>255),
			array('fecha_nacimiento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_usuario, nombre, apellido_paterno, apellido_materno, email, usuario, pw, fecha_nacimiento, id_tipo_usuario', 'safe', 'on'=>'search'),
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
			'tblCaratulaPoas' => array(self::HAS_MANY, 'TblCaratulaPoa', 'id_usuario'),
			'idTipoUsuario' => array(self::BELONGS_TO, 'TblcTipoUsuario', 'id_tipo_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario' => 'Id Usuario',
			'nombre' => 'Nombre',
			'apellido_paterno' => 'Apellido Paterno',
			'apellido_materno' => 'Apellido Materno',
			'email' => 'Email',
			'usuario' => 'Usuario',
			'pw' => 'Contraseña',
			'fecha_nacimiento' => 'Fecha de Nacimiento',
			'id_tipo_usuario' => 'Tipo Usuario',
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

		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido_paterno',$this->apellido_paterno,true);
		$criteria->compare('apellido_materno',$this->apellido_materno,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('pw',$this->pw,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('id_tipo_usuario',$this->id_tipo_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
