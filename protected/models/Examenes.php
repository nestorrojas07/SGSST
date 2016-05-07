<?php

/**
 * This is the model class for table "examenes".
 *
 * The followings are the available columns in table 'examenes':
 * @property integer $id
 * @property string $Tipo
 * @property string $Fecha
 * @property string $Descripcion
 * @property string $Diagnostico
 * @property integer $IdHistoriaClinica
 *
 * The followings are the available model relations:
 * @property Historiaclinica $idHistoriaClinica
 */
class Examenes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'examenes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Tipo, Fecha, Descripcion, Diagnostico', 'required'),
			array('IdHistoriaClinica', 'numerical', 'integerOnly'=>true),
			array('Tipo', 'length', 'max'=>45),
			array('Descripcion', 'length', 'max'=>200),
			array('Diagnostico', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Tipo, Fecha, Descripcion, Diagnostico, IdHistoriaClinica', 'safe', 'on'=>'search'),
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
			'idHistoriaClinica' => array(self::BELONGS_TO, 'Historiaclinica', 'IdHistoriaClinica'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Tipo' => 'Tipo',
			'Fecha' => 'Fecha',
			'Descripcion' => 'Descripcion',
			'Diagnostico' => 'Diagnostico',
			'IdHistoriaClinica' => 'Id Historia Clinica',
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
		$criteria->compare('Tipo',$this->Tipo,true);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Diagnostico',$this->Diagnostico,true);
		$criteria->compare('IdHistoriaClinica',$this->IdHistoriaClinica);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Examenes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getMenuHistoriaClinica()
	{
		return CHtml::listData(Historiaclinica::Model()->findAll(),"Id","concatened");
	}

	public function getNombreHistoriaClinica($id)
	{
		$modelo=Historiaclinica::model()->findByPk($id);
		if($modelo!==null)
		{
			return $modelo->Descripcion;
		}
	}
	public function getCedulaTrabajador($id)
	{
		$modelo=Historiaclinica::model()->findByPk($id);
		if($modelo!==null)
		{
			return $modelo->Cedula_trabajador;
		}
	}
	public function getNombreTrabajador($id)
	{
		$modelo=Trabajador::model()->findByPk($id);
		if($modelo!==null)
		{
			return $modelo->Nombre;
		}
	}

	public function getMenuTipos()
	{
		return array("Seleccione un tipo de examen","Examen de ingreso","Examen periodico","Examen de egreso");
	}
	
	
	public function getFechaRealizacion()
	{
		$fecha = date('Y-m-d');
		$fechaRealizacion = strtotime ( '-1 year' , strtotime ( $fecha ) ) ;
		$fechaRealizacion = date ( 'Y-m-d' , $fechaRealizacion );

		if($this->getEsMayor($fechaRealizacion,$this->Fecha))
		{		 
			return true;
		}
		return false;
	}
	
	public function getEsMayor($date2,$date1)
	{
		
		if(strtotime($date1)<=strtotime($date2))
		{
			return true;
		}
		return false;
	}

	public function validarDatos()
	{
		if($this->Tipo==0)
		{
			return false;
		}
		return true;
	}

	public function asignarDatos()
	{
		if($this->Tipo==1)
		{
			$this->Tipo="Examen de ingreso";
		}
		if($this->Tipo==2)
		{
			$this->Tipo="Examen periodico";
		}
		if($this->Tipo==3)
		{
			$this->Tipo="Examen de egreso";
		}
	}

}
