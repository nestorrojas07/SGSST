<?php

/**
 * This is the model class for table "afiliaciones".
 *
 * The followings are the available columns in table 'afiliaciones':
 * @property integer $Id
 * @property string $Nombre
 * @property string $Descripcion
 * @property string $Fecha
 *
 * The followings are the available model relations:
 * @property Trabajador[] $trabajadors
 */
class Afiliaciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'afiliaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, Descripcion', 'required'),
			array('Nombre', 'length', 'max'=>30),
			array('Descripcion', 'length', 'max'=>300),
			array('Fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, Nombre, Descripcion, Fecha', 'safe', 'on'=>'search'),
			array('Nombre, Descripcion', 'match', 'pattern'=>'/^[¿!¡;,:\.\?#@()"\p{L}\p{N}\s_]+$/u', 'message'=>Yii::t('app','Special characters are not valid')),
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
			'trabajadors' => array(self::MANY_MANY, 'Trabajador', 'trabajador_afiliaciones(IdAfiliaciones, Cedula)'),
		);
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'Nombre' => 'Nombre',
			'Descripcion' => 'Descripcion',
			'Fecha' => 'Fecha',
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
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Fecha',$this->Fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Afiliaciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	/**
	*Retorna toda la lista de trabajadores para ser usada por el DropDwonList 
	*/

	public function getMenuTrabajadores()
	{
		return CHtml::listData(Trabajador::model()->findAll(),"Cedula","Cedula");
	}
	/**
	*Retorna toda la lista de afiliaciones para ser usada por el DropDwonList 
	*/
	public function getMenuAfiliacion()
	{
		return CHtml::listData(Afiliaciones::model()->findAll(),"Id","Descripcion");
	}
	/**
	*Metodo de prueba implementado para verificar el funcionamiento de los llamados en el controlador. Es irrelevante para el proyecto.
	*/
	public function getUno($prueba)
	{
		return $prueba;
	}
}
