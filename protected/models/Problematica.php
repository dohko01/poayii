<?php

/**
 * This is the model class for table "tbl_problematica".
 *
 * The followings are the available columns in table 'tbl_problematica':
 * @property integer $id_problematica
 * @property string $descripcion
 * @property string $tipo
 * @property integer $id_arbol_problematica
 *
 * The followings are the available model relations:
 * @property TblArbolProblema $idArbolProblematica
 */
class Problematica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_problematica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_arbol_problematica', 'numerical', 'integerOnly'=>true),
			array('descripcion, tipo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_problematica, descripcion, tipo, id_arbol_problematica', 'safe', 'on'=>'search'),
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
			'idArbolProblematica' => array(self::BELONGS_TO, 'TblArbolProblema', 'id_arbol_problematica'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_problematica' => 'Id Problematica',
			'descripcion' => 'Descripcion',
			'tipo' => 'Tipo',
			'id_arbol_problematica' => 'Id Arbol Problematica',
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

		$criteria->compare('id_problematica',$this->id_problematica);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('id_arbol_problematica',$this->id_arbol_problematica);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Problematica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function insertCausas($values)
        {
            $models = array();
            $valid = true;
            
            foreach($values['causas'] as $key => $causa)
            {
                $models[$key] = Problematica::model();
            }

            foreach($values['causas'] as $key2 => $causa)
            {
                $models[$key2] = new Problematica;
                $models[$key2]->id_arbol_problematica = $values['Problematica']['id_arbol_problematica'];
                $models[$key2]->descripcion = $causa;
                $models[$key2]->tipo = 'causa';
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
}
