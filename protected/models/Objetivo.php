<?php

/**
 * This is the model class for table "tbl_objetivo".
 *
 * The followings are the available columns in table 'tbl_objetivo':
 * @property integer $id_objetivo
 * @property string $descripcion
 * @property string $tipo
 * @property integer $id_arbol_objetivo
 */
class Objetivo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_objetivo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_arbol_objetivo', 'numerical', 'integerOnly'=>true),
			array('descripcion, tipo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_objetivo, descripcion, tipo, id_arbol_objetivo', 'safe', 'on'=>'search'),
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
			'id_objetivo' => 'Id Objetivo',
			'descripcion' => 'Descripcion',
			'tipo' => 'Tipo',
			'id_arbol_objetivo' => 'Id Arbol Objetivo',
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

		$criteria->compare('id_objetivo',$this->id_objetivo);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('id_arbol_objetivo',$this->id_arbol_objetivo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Objetivo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function insertMedios($values, $tipo = 'medio')
        {
            $models = array();
            $valid = true;
            
            $nombreTipo = 'medios';
            
            if($tipo == 'fin')
            {
                $nombreTipo = 'fines';
            }
            
            foreach($values[$nombreTipo] as $key => $causa)
            {
                $models[$key] = Objetivo::model();
            }

            foreach($values[$nombreTipo] as $key2 => $causa)
            {
                $models[$key2] = new Objetivo;
                $models[$key2]->id_arbol_objetivo = $values['Problematica']['id_arbol_objetivo'];
                $models[$key2]->descripcion = $causa;
                $models[$key2]->tipo = $tipo;
                $valid = $models[$key2]->validate() && $valid;
            }

            if($valid)
            {
                $ii = 0;
                while(isset($models[$ii]))
                {
                    $models[$ii++]->save(false);
                }
            }
        }
        
        public function insertFines($values)
        {
            $this->insertMedios($values, 'fin');
        }
}
