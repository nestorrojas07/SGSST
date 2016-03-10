<?php

/**
 * This is the model class for table "trabajador".
 *
 * The followings are the available columns in table 'trabajador':
 * @property string $Cedula
 * @property string $Nombre
 * @property string $Telefono
 * @property string $Correo
 * @property integer $Trabajador_Afiliaciones
 * @property integer $Trabajador_HistoriaClinica
 *
 * The followings are the available model relations:
 * @property Afiliaciones $trabajadorAfiliaciones
 * @property Historiaclinica $trabajadorHistoriaClinica
 */
class Trabajador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'trabajador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cedula, Nombre, Telefono, Correo', 'required'),
			array('Trabajador_Afiliaciones, Trabajador_HistoriaClinica', 'numerical', 'integerOnly'=>true),
			array('Cedula, Telefono', 'length', 'max'=>20),
			array('Nombre', 'length', 'max'=>45),
			array('Correo', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Cedula, Nombre, Telefono, Correo, Trabajador_Afiliaciones, Trabajador_HistoriaClinica', 'safe', 'on'=>'search'),
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
			'trabajadorAfiliaciones' => array(self::BELONGS_TO, 'Afiliaciones', 'Trabajador_Afiliaciones'),
			'trabajadorHistoriaClinica' => array(self::BELONGS_TO, 'Historiaclinica', 'Trabajador_HistoriaClinica'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Cedula' => 'Cedula',
			'Nombre' => 'Nombre',
			'Telefono' => 'Telefono',
			'Correo' => 'Correo',
			'Trabajador_Afiliaciones' => 'Trabajador Afiliaciones',
			'Trabajador_HistoriaClinica' => 'Trabajador Historia Clinica',
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

		$criteria->compare('Cedula',$this->Cedula,true);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Telefono',$this->Telefono,true);
		$criteria->compare('Correo',$this->Correo,true);
		$criteria->compare('Trabajador_Afiliaciones',$this->Trabajador_Afiliaciones);
		$criteria->compare('Trabajador_HistoriaClinica',$this->Trabajador_HistoriaClinica);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Trabajador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
