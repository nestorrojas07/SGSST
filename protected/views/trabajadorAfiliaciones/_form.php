
<?php $form=$this->beginWidget("CActiveForm"); ?>

	<?php echo $form->label($model,"Cedula") ?>
	<?php echo $form->dropDownList($model,"Cedula", $model->getMenuTrabajadores(),array("empty"=>"Seleccione un trabajador")) ;?>
	<?php echo $form->error($model,"Cedula") ?>
	<br>

	<?php echo $form->label($model,"Afiliacion") ?>
	<?php echo $form->dropDownList($model,"IdAfiliaciones", $model->getMenuAfiliacion(),array("empty"=> "Seleccione una afiliación") );?>
	<?php echo $form->error($model,"IdAfiliaciones") ?>

	<br>


	<?php echo CHtml::submitButton($model->isNewRecord ? 'Afiliar' : 'Actualizar',array("class"=>"btn btn-inverse")) ?>

<?php $this->endWidget() ?>