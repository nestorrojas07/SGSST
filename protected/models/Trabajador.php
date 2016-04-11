<?php

/**
 * This is the model class for table "trabajador".
 *
 * The followings are the available columns in table 'trabajador':
 * @property string $Cedula
 * @property string $Nombre
 * @property string $Telefono
 * @property string $Foto_Link
 * @property string $Correo
 * @property string $Titulo_academico
 * @property string $experiencia
 * @property integer $ausencias
 * @property integer $IdBrigada
 * @property integer $IdTrabajo
 *
 * The followings are the available model relations:
 * @property Historiaclinica[] $historiaclinicas
 * @property Trabajo $idTrabajo
 * @property Brigada $idBrigada
 * @property Afiliaciones[] $afiliaciones
 * @property Vencimientos[] $vencimientoses
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
			array('Cedula, Nombre, Telefono, Correo, Titulo_academico, experiencia', 'required'),
			array('ausencias, IdBrigada, IdTrabajo', 'numerical', 'integerOnly'=>true),
			array('Cedula, Telefono', 'length', 'max'=>20),
			array('Nombre', 'length', 'max'=>45),
			array('Foto_Link', 'length', 'max'=>255),
			array('Correo', 'length', 'max'=>30),
			array('Titulo_academico', 'length', 'max'=>100),
			array('experiencia', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Cedula, Nombre, Telefono, Foto_Link, Correo, Titulo_academico, experiencia, ausencias, IdBrigada, IdTrabajo', 'safe', 'on'=>'search'),
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
			'historiaclinicas' => array(self::HAS_MANY, 'Historiaclinica', 'Cedula_trabajador'),
			'idTrabajo' => array(self::BELONGS_TO, 'Trabajo', 'IdTrabajo'),
			'idBrigada' => array(self::BELONGS_TO, 'Brigada', 'IdBrigada'),
			'afiliaciones' => array(self::MANY_MANY, 'Afiliaciones', 'trabajador_afiliaciones(Cedula, IdAfiliaciones)'),
			'vencimientoses' => array(self::HAS_MANY, 'Vencimientos', 'Cedula_Trabajador'),
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
			'Foto_Link' => 'Foto Link',
			'Correo' => 'Correo',
			'Titulo_academico' => 'Titulo Academico',
			'experiencia' => 'Experiencia',
			'ausencias' => 'Ausencias',
			'IdBrigada' => 'Id Brigada',
			'IdTrabajo' => 'Id Trabajo',
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
		$criteria->compare('Foto_Link',$this->Foto_Link,true);
		$criteria->compare('Correo',$this->Correo,true);
		$criteria->compare('Titulo_academico',$this->Titulo_academico,true);
		$criteria->compare('experiencia',$this->experiencia,true);
		$criteria->compare('ausencias',$this->ausencias);
		$criteria->compare('IdBrigada',$this->IdBrigada);
		$criteria->compare('IdTrabajo',$this->IdTrabajo);

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

	public function getMenuTrabajo()
	{
		return CHtml::listData(Trabajo::Model()->findAll(),"Id","tarea");
	}	

	public function getMenuBrigada()
	{
		return CHtml::listData(Brigada::Model()->findAll(),"IdBrigada","Funcion");
	}

	public function getFuncionBrigada($id)
	{
		$modelo=Brigada::model()->findByPk($id);
		if($modelo!==null)
			return $modelo->Funcion;
	}
	public function getTareaTrabajo($id)
	{
		$modelo=Trabajo::model()->findByPk($id);
		if($modelo!==null)
			return $modelo->tarea;
	}
	public function getMenuAfiliaciones()
	{
		return CHtml::listData(Afiliaciones::model()->findAll(),"Id","Descripcion");
	}	

}
