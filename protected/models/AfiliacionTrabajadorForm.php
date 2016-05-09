<?php 

/**
 * This is the model class for table "afiliacionesTrabajador".
 *
 * The followings are the available columns in table 'afiliaciones':
 * @property integer $afiliacion
 * @property string $trabajador
 */
class AfiliacionTrabajadorForm extends CFormModel
{
	public $trabajador;
	public $afiliacion;
	/**
	*Reglas implementadas para los accesos a las funciones de afiliacionestrabajador
	*/
	public function rules()
	{
		return array(
				array("trabajador, afiliacion","required"),
			);
	}
}

 ?>