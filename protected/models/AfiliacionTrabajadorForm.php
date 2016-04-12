<?php 
class AfiliacionTrabajadorForm extends CFormModel
{
	public $trabajador;
	public $afiliacion;

	public function rules()
	{
		return array(
				array("trabajador, afiliacion","required"),
			);
	}
}

 ?>