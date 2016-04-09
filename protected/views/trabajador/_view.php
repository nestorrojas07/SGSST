<?php
/* @var $this TrabajadorController */
/* @var $data Trabajador */
?>

<div class="media">

	<div class="media body">
		<h4 class="media heading">
			
			<b><?php echo CHtml::encode($data->getAttributeLabel('Cedula')); ?>:</b>
			<small><b><?php echo CHtml::link(CHtml::encode($data->Cedula), array('view', 'id'=>$data->Cedula)); ?></b></small>
			<br>
			<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
			<small><b><?php echo CHtml::encode($data->Nombre); ?></b></small>
			
			
		</h4>
	</div>


	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
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
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trabajador_trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->trabajador_trabajo); ?>
	<br /> -->


</div>