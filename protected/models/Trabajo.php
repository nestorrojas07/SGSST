<?php

/**
 * This is the model class for table "trabajo".
 *
 * The followings are the available columns in table 'trabajo':
 * @property integer $Id
 * @property string $proceso
 * @property string $zona
 * @property string $actividad
 * @property string $tarea
 * @property integer $rutinaria
 * @property string $peligro_descripcion
 * @property string $peligro_clasificacion
 * @property string $peligro__efectosPosibles
 * @property string $control_existente_fuente
 * @property string $control_existente_medio
 * @property string $control_existente_persona
 * @property integer $evaluacion_riesgo_nivel_deficiencia
 * @property integer $evaluacion_riesgo_nivel_exposicion
 * @property integer $evaluacion_riesgo_nivel_probabilidad
 * @property string $evaluacion_riesgo_interpretacion_nivel_probabilidad
 * @property integer $evaluacion_riesgo_nivel_consecuencia
 * @property integer $evaluacion_riesgo_nivel_riesgo_intervencion
 * @property string $evaluacion_riesgo_interpretacion_nivel_riesgo
 * @property string $valoracion_riesgo
 * @property integer $criterio_numero_expuestos
 * @property string $criterio_peor_consecuencia
 * @property integer $criterio_requisito_legal
 * @property string $intervencion_eliminacion
 * @property string $intervencion_sustituacion
 * @property string $intervencion_control_ingenieria
 * @property string $intervencion_control_administrativo
 * @property string $intervencion_elementos_proteccion_personal
 *
 * The followings are the available model relations:
 * @property Trabajador[] $trabajadors
 */
class Trabajo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'trabajo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proceso, zona, actividad, tarea, rutinaria, peligro_descripcion, peligro_clasificacion, peligro__efectosPosibles, evaluacion_riesgo_nivel_deficiencia, evaluacion_riesgo_nivel_exposicion, evaluacion_riesgo_nivel_consecuencia, criterio_peor_consecuencia, criterio_requisito_legal', 'required'),
			array('rutinaria, evaluacion_riesgo_nivel_deficiencia, evaluacion_riesgo_nivel_exposicion, evaluacion_riesgo_nivel_probabilidad, evaluacion_riesgo_nivel_consecuencia, evaluacion_riesgo_nivel_riesgo_intervencion, criterio_numero_expuestos, criterio_requisito_legal', 'numerical', 'integerOnly'=>true),
			array('proceso', 'length', 'max'=>60),
			array('zona, actividad, tarea', 'length', 'max'=>50),
			array('peligro_descripcion, intervencion_elementos_proteccion_personal', 'length', 'max'=>200),
			array('peligro_clasificacion, peligro__efectosPosibles, control_existente_fuente, control_existente_medio, intervencion_eliminacion, intervencion_sustituacion, intervencion_control_ingenieria', 'length', 'max'=>20),
			array('control_existente_persona, valoracion_riesgo', 'length', 'max'=>80),
			array('evaluacion_riesgo_interpretacion_nivel_probabilidad', 'length', 'max'=>9),
			array('evaluacion_riesgo_interpretacion_nivel_riesgo, intervencion_control_administrativo', 'length', 'max'=>300),
			array('criterio_peor_consecuencia', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, proceso, zona, actividad, tarea, rutinaria, peligro_descripcion, peligro_clasificacion, peligro__efectosPosibles, control_existente_fuente, control_existente_medio, control_existente_persona, evaluacion_riesgo_nivel_deficiencia, evaluacion_riesgo_nivel_exposicion, evaluacion_riesgo_nivel_probabilidad, evaluacion_riesgo_interpretacion_nivel_probabilidad, evaluacion_riesgo_nivel_consecuencia, evaluacion_riesgo_nivel_riesgo_intervencion, evaluacion_riesgo_interpretacion_nivel_riesgo, valoracion_riesgo, criterio_numero_expuestos, criterio_peor_consecuencia, criterio_requisito_legal, intervencion_eliminacion, intervencion_sustituacion, intervencion_control_ingenieria, intervencion_control_administrativo, intervencion_elementos_proteccion_personal', 'safe', 'on'=>'search'),
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
			'trabajadors' => array(self::HAS_MANY, 'Trabajador', 'IdTrabajo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'proceso' => 'Proceso',
			'zona' => 'Zona',
			'actividad' => 'Actividad',
			'tarea' => 'Tarea',
			'rutinaria' => 'Rutinaria',
			'peligro_descripcion' => 'Peligro Descripcion',
			'peligro_clasificacion' => 'Peligro Clasificacion',
			'peligro__efectosPosibles' => 'Peligro Efectos Posibles',
			'control_existente_fuente' => 'Control Existente Fuente',
			'control_existente_medio' => 'Control Existente Medio',
			'control_existente_persona' => 'Control Existente Persona',
			'evaluacion_riesgo_nivel_deficiencia' => 'Evaluacion Riesgo Nivel Deficiencia',
			'evaluacion_riesgo_nivel_exposicion' => 'Evaluacion Riesgo Nivel Exposicion',
			'evaluacion_riesgo_nivel_probabilidad' => 'Evaluacion Riesgo Nivel Probabilidad',
			'evaluacion_riesgo_interpretacion_nivel_probabilidad' => 'Evaluacion Riesgo Interpretacion Nivel Probabilidad',
			'evaluacion_riesgo_nivel_consecuencia' => 'Evaluacion Riesgo Nivel Consecuencia',
			'evaluacion_riesgo_nivel_riesgo_intervencion' => 'Evaluacion Riesgo Nivel Riesgo Intervencion',
			'evaluacion_riesgo_interpretacion_nivel_riesgo' => 'Evaluacion Riesgo Interpretacion Nivel Riesgo',
			'valoracion_riesgo' => 'Valoracion Riesgo',
			'criterio_numero_expuestos' => 'Criterio Numero Expuestos',
			'criterio_peor_consecuencia' => 'Criterio Peor Consecuencia',
			'criterio_requisito_legal' => 'Criterio Requisito Legal',
			'intervencion_eliminacion' => 'Intervencion Eliminacion',
			'intervencion_sustituacion' => 'Intervencion Sustituacion',
			'intervencion_control_ingenieria' => 'Intervencion Control Ingenieria',
			'intervencion_control_administrativo' => 'Intervencion Control Administrativo',
			'intervencion_elementos_proteccion_personal' => 'Intervencion Elementos Proteccion Personal',
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
		$criteria->compare('proceso',$this->proceso,true);
		$criteria->compare('zona',$this->zona,true);
		$criteria->compare('actividad',$this->actividad,true);
		$criteria->compare('tarea',$this->tarea,true);
		$criteria->compare('rutinaria',$this->rutinaria);
		$criteria->compare('peligro_descripcion',$this->peligro_descripcion,true);
		$criteria->compare('peligro_clasificacion',$this->peligro_clasificacion,true);
		$criteria->compare('peligro__efectosPosibles',$this->peligro__efectosPosibles,true);
		$criteria->compare('control_existente_fuente',$this->control_existente_fuente,true);
		$criteria->compare('control_existente_medio',$this->control_existente_medio,true);
		$criteria->compare('control_existente_persona',$this->control_existente_persona,true);
		$criteria->compare('evaluacion_riesgo_nivel_deficiencia',$this->evaluacion_riesgo_nivel_deficiencia);
		$criteria->compare('evaluacion_riesgo_nivel_exposicion',$this->evaluacion_riesgo_nivel_exposicion);
		$criteria->compare('evaluacion_riesgo_nivel_probabilidad',$this->evaluacion_riesgo_nivel_probabilidad);
		$criteria->compare('evaluacion_riesgo_interpretacion_nivel_probabilidad',$this->evaluacion_riesgo_interpretacion_nivel_probabilidad,true);
		$criteria->compare('evaluacion_riesgo_nivel_consecuencia',$this->evaluacion_riesgo_nivel_consecuencia);
		$criteria->compare('evaluacion_riesgo_nivel_riesgo_intervencion',$this->evaluacion_riesgo_nivel_riesgo_intervencion);
		$criteria->compare('evaluacion_riesgo_interpretacion_nivel_riesgo',$this->evaluacion_riesgo_interpretacion_nivel_riesgo,true);
		$criteria->compare('valoracion_riesgo',$this->valoracion_riesgo,true);
		$criteria->compare('criterio_numero_expuestos',$this->criterio_numero_expuestos);
		$criteria->compare('criterio_peor_consecuencia',$this->criterio_peor_consecuencia,true);
		$criteria->compare('criterio_requisito_legal',$this->criterio_requisito_legal);
		$criteria->compare('intervencion_eliminacion',$this->intervencion_eliminacion,true);
		$criteria->compare('intervencion_sustituacion',$this->intervencion_sustituacion,true);
		$criteria->compare('intervencion_control_ingenieria',$this->intervencion_control_ingenieria,true);
		$criteria->compare('intervencion_control_administrativo',$this->intervencion_control_administrativo,true);
		$criteria->compare('intervencion_elementos_proteccion_personal',$this->intervencion_elementos_proteccion_personal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Trabajo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getCambiarRutinaria()
	{
		if($this->rutinaria==0)
		{
			return "no";
		}
		else
		{
			return "si";
		}
	}

	public function getCambiarRequisitoLegal()
	{
		if($this->criterio_requisito_legal==0)
		{
			return "no";
		}
		else
		{
			return "si";
		}
	}

	public function getNivelConsecuencia()
	{
		return array("Seleccione un nivel de consecuencia","10","25","60","100");
	}

	public function getPeligroClasificacion()
	{
		return array("Seleccione una clasificacion","Biologicos","Fisicos","Quimicos","Psicosociales","Biomecanicos","Condiciones de seguridad","Fenomenos naturales");
	}	

	public function getNivelesDeficiencia()
	{
		return array("Seleccione un nivel de deficiencia","2","6","10");
	}

	public function getNivelesExposicion()
	{
		return array("Seleccione un nivel de exposicion","1","2","3","4");
	}

	public function getSiONo()
	{
		return array("Seleccione una opcion","si","no");
	}
	public function verificarDatos()
	{
		if($this->criterio_requisito_legal==0 || $this->rutinaria==0 || $this->peligro_clasificacion==0 || $this->evaluacion_riesgo_nivel_consecuencia==0 || $this->evaluacion_riesgo_nivel_deficiencia==0 || $this->evaluacion_riesgo_nivel_exposicion==0)
		{			
			return false;
		}
		else
		{
			return true;
		}
	}

	public function calcularNivelesRiesgo()
	{
		$this->calcularNivelProbablidad();
		$this->calcularInterpretacionNivelProbabilidad();
		$this->calcularNivelRiesgo();
		$this->calularEvaluacionInterpretacionNivelRiesgo();
		$this->toStringNivelRiesgo();
		$this->calcularValoracionRiesgo();		
	}

	public function calcularNivelProbablidad()
	{
		$this->evaluacion_riesgo_nivel_probabilidad=$this->evaluacion_riesgo_nivel_exposicion * $this->evaluacion_riesgo_nivel_deficiencia;
	}

	public function calcularInterpretacionNivelProbabilidad()
	{
		$nProbabilidad= $this->evaluacion_riesgo_nivel_probabilidad;
		if(2<=$nProbabilidad && $nProbabilidad<=4)
		{
			$this->evaluacion_riesgo_interpretacion_nivel_probabilidad="Bajo";
		}
		if(6<=$nProbabilidad && $nProbabilidad<=8)
		{
			$this->evaluacion_riesgo_interpretacion_nivel_probabilidad="Medio";
		}
		if(10<=$nProbabilidad && $nProbabilidad<=20)
		{
			$this->evaluacion_riesgo_interpretacion_nivel_probabilidad="Alto";
		}
		if(24<=$nProbabilidad && $nProbabilidad<=40)
		{
			$this->evaluacion_riesgo_interpretacion_nivel_probabilidad="Muy alto";
		}
	}

	public function calcularNivelRiesgo()
	{
		$nConsecuencia=$this->evaluacion_riesgo_nivel_consecuencia;
		$nProbabilidad=$this->evaluacion_riesgo_nivel_probabilidad;
		return $nRiesgo=$nConsecuencia*$nProbabilidad;
	
	}

	public function toStringNivelRiesgo()
	{
		$nRiesgo=$this->calcularNivelRiesgo();

		if(20==$nRiesgo)
		{
			$this->evaluacion_riesgo_nivel_riesgo_intervencion=4;
		}
		if(20<$nRiesgo && $nRiesgo<=120)
		{
			$this->evaluacion_riesgo_nivel_riesgo_intervencion=3;
		}
		if(150<=$nRiesgo && $nRiesgo<=500)
		{
			$this->evaluacion_riesgo_nivel_riesgo_intervencion=2;
		}
		if(600<=$nRiesgo && $nRiesgo<=4000)
		{
			$this->evaluacion_riesgo_nivel_riesgo_intervencion=1;
		}	
	}

	public function calularEvaluacionInterpretacionNivelRiesgo()
	{
		$nRiesgo=$this->calcularNivelRiesgo();
		if($nRiesgo==20)
		{
			$this->evaluacion_riesgo_interpretacion_nivel_riesgo="MANTENER LAS MEDIDAS DE CONTROL EXISTENTE, PERO SE DEBERIAN CONSIDERAR SOLUCIONES O MEJORAS Y SE DEBEN HACER COMPROBACIONES PERIODICAS PARA ASEGURAR QUE EL RIESGO AUN ES ACEPTABLE";
		}
		if(40<=$nRiesgo && $nRiesgo<=120)
		{
			$this->evaluacion_riesgo_interpretacion_nivel_riesgo="MEJORAR SI ES POSIBLE. SERIA CONVENIENTE JUSTIFICAR LA INTERVENCION Y SU RENTABILIDAD";
		}
		if(150<=$nRiesgo && $nRiesgo<=500)
		{
			$this->evaluacion_riesgo_interpretacion_nivel_riesgo="CORREGIR Y ADOPTAR MEDIDAS DE CONTROL DE INMEDIATO. SIN EMBARGO, SUSPENDA ACTIVIDADES SI EL NIVEL DE RIESGO ESTA POR ENCIMA O IGUAL DE 360";
		}
		if(600<=$nRiesgo && $nRiesgo<=4000)
		{
			$this->evaluacion_riesgo_interpretacion_nivel_riesgo="SITUACION CRITICA. SUSPENDER ACTIVIDAD HASTA QUE EL RIESGO ESTE BAJO CONTROL. INTERVENCION URGENTE";
		}
	}

	public function calcularValoracionRiesgo()
	{
		$nRiesgo=$this->evaluacion_riesgo_nivel_riesgo_intervencion;

		if($nRiesgo==1)
		{
			$this->valoracion_riesgo="NO ACEPTABLE";
		}
		if($nRiesgo==2)
		{
			$this->valoracion_riesgo="NO ACEPTABLE O ACEPTABLE CON CONTROL ESPECIFICO";
		}
		if($nRiesgo==3)
		{
			$this->valoracion_riesgo="MEJORABLE";
		}
		if($nRiesgo==4)
		{
			$this->valoracion_riesgo="ACEPTABLE";
		}
	}


	public function asignarDatos()
	{
		$this->asignarNivelConsecuencia();
		$this->asignarClasificacionPeligro();
		$this->asignarNivelDeficiencia();		
	}
	
	public function asignarNivelDeficiencia()
	{
		if($this->evaluacion_riesgo_nivel_deficiencia==1)
		{
			$this->evaluacion_riesgo_nivel_deficiencia=2;
		}
		elseif($this->evaluacion_riesgo_nivel_deficiencia==2)
		{
			$this->evaluacion_riesgo_nivel_deficiencia=6;
		}
		if($this->evaluacion_riesgo_nivel_deficiencia==3)
		{
			$this->evaluacion_riesgo_nivel_deficiencia=10;
		}
	}

	public function asignarNivelConsecuencia()
	{
		if($this->evaluacion_riesgo_nivel_consecuencia==1)
		{
			$this->evaluacion_riesgo_nivel_consecuencia=10;
		}
		if($this->evaluacion_riesgo_nivel_consecuencia==2)
		{
			$this->evaluacion_riesgo_nivel_consecuencia=25;
		}
		if($this->evaluacion_riesgo_nivel_consecuencia==3)
		{
			$this->evaluacion_riesgo_nivel_consecuencia=60;
		}
		if($this->evaluacion_riesgo_nivel_consecuencia==4)
		{
			$this->evaluacion_riesgo_nivel_consecuencia=100;
		}
	}

	public function asignarClasificacionPeligro()
	{
		if($this->peligro_clasificacion==1)
		{
			$this->peligro_clasificacion="Biologicos";
		}
		if($this->peligro_clasificacion==2)
		{
			$this->peligro_clasificacion="Fisicos";
		}
		if($this->peligro_clasificacion==3)
		{
			$this->peligro_clasificacion="Quimicos";
		}
		if($this->peligro_clasificacion==4)
		{
			$this->peligro_clasificacion="Psicosociales";
		}
		if($this->peligro_clasificacion==5)
		{
			$this->peligro_clasificacion="Biomecanicos";
		}
		if($this->peligro_clasificacion==6)
		{
			$this->peligro_clasificacion="condiciones de seguridad";
		}
		if($this->peligro_clasificacion==7)
		{
			$this->peligro_clasificacion="Fenomenos naturales";
		}
	}
}
