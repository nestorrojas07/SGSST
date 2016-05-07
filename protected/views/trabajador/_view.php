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

</div>