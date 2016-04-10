<?php

/**
 * This is the model class for table "vencimientos".
 *
 * The followings are the available columns in table 'vencimientos':
 * @property integer $id
 * @property string $Nombre
 * @property string $fecha
 * @property string $Instrucciones
 * @property integer $estado
 * @property string $Cedula_Trabajador
 *
 * The followings are the available model relations:
 * @property Trabajador $cedulaTrabajador
 */
class Vencimientos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vencimientos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, fecha, Instrucciones, estado', 'required'),
			array('estado', 'numerical', 'integerOnly'=>true),
			array('Nombre', 'length', 'max'=>45),
			array('Instrucciones', 'length', 'max'=>255),
			array('Cedula_Trabajador', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Nombre, fecha, Instrucciones, estado, Cedula_Trabajador', 'safe', 'on'=>'search'),
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
			'cedulaTrabajador' => array(self::BELONGS_TO, 'Trabajador', 'Cedula_Trabajador'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Nombre' => 'Nombre',
			'fecha' => 'Fecha',
			'Instrucciones' => 'Instrucciones',
			'estado' => 'Estado',
			'Cedula_Trabajador' => 'Cedula Trabajador',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('Instrucciones',$this->Instrucciones,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('Cedula_Trabajador',$this->Cedula_Trabajador,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vencimientos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
