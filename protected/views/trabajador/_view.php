<?php
/* @var $this TrabajadorController */
/* @var $data Trabajador */
?>

<div class="view">


	<div class="media body">
		<h4 class="media heading">
			
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Cedula')); ?>:</font></strong></b>
			<small><?php echo CHtml::link(CHtml::encode($data->Cedula), array('view', 'id'=>$data->Cedula)); ?></small>
			<br>
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</font></strong></b>
			<font color="black"><?php echo CHtml::encode($data->Nombre); ?></font>
			
			
		</h4>
	</div>
	
	<!--

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cedula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Cedula), array('view', 'id'=>$data->Cedula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Foto_Link')); ?>:</b>
	<?php echo CHtml::encode($data->Foto_Link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo')); ?>:</b>
	<?php echo CHtml::encode($data->Correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Titulo_academico')); ?>:</b>
	<?php echo CHtml::encode($data->Titulo_academico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('experiencia')); ?>:</b>
	<?php echo CHtml::encode($data->experiencia); ?>
	<br />

	-->

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ausencias')); ?>:</b>
	<?php echo CHtml::encode($data->ausencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdBrigada')); ?>:</b>
	<?php echo CHtml::encode($data->IdBrigada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdTrabajo')); ?>:</b>
	<?php echo CHtml::encode($data->IdTrabajo); ?>
	<br />

	*/ ?>

</div>