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
			array('Descripcion', 'match', 'pattern'=>'/^[¿!¡;,:\.\?#@()"\p{L}\p{N}\s_]+$/u', 'message'=>Yii::t('app','Special characters are not valid')),
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
	/**
		Retorna la lista de trabajadores para ser usada en el Drop down list.
	*/
	public function getMenuTrabajadores()
	{
		return CHtml::listData(Trabajador::model()->findAll(),"Cedula","Nombre");
	}
	/**
		Retorn ael nombre del trabajador al que pertenece la historia clinica por medio del id, que corresponde a su cedula.
	*/
	public function getNombreTrabajador($id)
	{
		$modelo=Trabajador::model()->findByPk($id);
		if($modelo!==null)
		{
			return $modelo->Nombre;
		}
	}
	/**
		Retorna la concatenación de la cedula del trabajador al cual pertenece la historia clinica y la descripcion de la misma.
	*/
	public function getConcatened()
	{
		return $this->Cedula_trabajador.' - '.$this->Descripcion;
	}
	/**
		Retorna el examen de ingreso dentro de la lista de examenes realizados al trabajador.
	*/
	public function getExamenIngreso()
	{
		foreach ($this->examenes as $examen) 
		{
			if (strcmp ($examen->Tipo , "Examen de ingreso" ) == 0)
			{
				return $examen;
			}
		}
		return null;
	}
	/**
	Retorna true si no se ha cumplido el año de realización del ultimo examen periodico.
	*/
	public function getExamenPeriodico()
	{
		$ultimoExamen=null;
		foreach ($this->examenes as $examen)
		{
			if($ultimoExamen==null)
			{
				$ultimoExamen=$examen;
			}
			elseif(strcmp ($examen->Tipo , "Examen de ingreso" ) == 0 && !$this->existenPeriodicos)
			{
					$ultimoExamen=$examen;							
			}
			if(strcmp ($examen->Tipo , "Examen periodico" ) == 0 && $this->getEsMayor($ultimoExamen->Fecha,$examen->Fecha))
			{
					$ultimoExamen=$examen;
			}						
			if (strcmp ($examen->Tipo , "Examen de egreso" ) == 0)
			{
				return false;
			}			
		}
		if($ultimoExamen->fechaRealizacion)
		{
			return true;
		}
		return false;
	}

	/**
		Retorna true si existen examenes periodicos dentro de la lista de examens realizados al trabajador.
	*/

	public function getExistenPeriodicos()
	{
		foreach ($this->examenes as $examen)
		{
			if(strcmp ($examen->Tipo , "Examen periodico" ) == 0)
			{
				return true;
			}
		}
		return false;
	}
	/**
		Retorna true si la fecha $date2  es mayor a la fecha $date1
	*/
	public function getEsMayor($date1,$date2)
	{
		
		if(strtotime($date1)<=strtotime($date2))
		{
			return true;
		}
		return false;
	}



}
