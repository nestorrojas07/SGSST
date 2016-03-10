<?php
/* @var $this TrabajadorController */
/* @var $data Trabajador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cedula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Cedula), array('view', 'id'=>$data->Cedula)); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<BR>

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo')); ?>:</b>
	<?php echo CHtml::encode($data->Correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Trabajador_Afiliaciones')); ?>:</b>
	<?php echo CHtml::encode($data->Trabajador_Afiliaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Trabajador_HistoriaClinica')); ?>:</b>
	<?php echo CHtml::encode($data->Trabajador_HistoriaClinica); ?>
	<br />-->


</div>