<?php

/**
 * This is the model class for table "brigada".
 *
 * The followings are the available columns in table 'brigada':
 * @property integer $IdBrigada
 * @property string $Funcion
 * @property string $Descripcion_funcion
 *
 * The followings are the available model relations:
 * @property Trabajador[] $trabajadors
 */
class Brigada extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'brigada';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Funcion, Descripcion_funcion', 'required'),
			array('Funcion', 'length', 'max'=>45),
			array('Descripcion_funcion', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IdBrigada, Funcion, Descripcion_funcion', 'safe', 'on'=>'search'),
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
			'trabajadors' => array(self::HAS_MANY, 'Trabajador', 'IdBrigada'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdBrigada' => 'Id Brigada',
			'Funcion' => 'Funcion',
			'Descripcion_funcion' => 'Descripcion Funcion',
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

		$criteria->compare('IdBrigada',$this->IdBrigada);
		$criteria->compare('Funcion',$this->Funcion,true);
		$criteria->compare('Descripcion_funcion',$this->Descripcion_funcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Brigada the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
