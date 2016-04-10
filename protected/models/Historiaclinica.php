<?php

/**
 * This is the model class for table "historiaclinica".
 *
 * The followings are the available columns in table 'historiaclinica':
 * @property integer $Id
 * @property string $Descripcion
 * @property string $Cedula_trabajador
 *
 * The followings are the available model relations:
 * @property Examenes[] $examenes
 * @property Trabajador $cedulaTrabajador
 */
class Historiaclinica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'historiaclinica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Descripcion', 'required'),
			array('Descripcion', 'length', 'max'=>500),
			array('Cedula_trabajador', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, Descripcion, Cedula_trabajador', 'safe', 'on'=>'search'),
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
			'examenes' => array(self::HAS_MANY, 'Examenes', 'IdHistoriaClinica'),
			'cedulaTrabajador' => array(self::BELONGS_TO, 'Trabajador', 'Cedula_trabajador'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'Descripcion' => 'Descripcion',
			'Cedula_trabajador' => 'Cedula Trabajador',
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

		$criteria->compare('Id',$this->Id);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Cedula_trabajador',$this->Cedula_trabajador,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Historiaclinica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
