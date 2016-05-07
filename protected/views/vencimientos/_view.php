<?php
/* @var $this VencimientosController */
/* @var $data Vencimientos */
?>

<div class="view">


	<div class="media body">
		<h4 class="media heading">
			
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</font></strong></b>
			<small><?php echo CHtml::link(CHtml::encode($data->Nombre), array('view', 'id'=>$data->id)); ?></small>
		
				<span class="label label-<?php echo $data->estado==0?"success":"warning";?>"><?php echo $data->estado==0?"En orden":"Vencido" ?></span>		

			<br>
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('fecha_Vencimiento')); ?>:</font></strong></b>
			<font color="black"><?php echo CHtml::encode($data->fecha_Vencimiento); ?></font>
	
			
			
		</h4>
	</div>
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_Vencimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_Vencimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Instrucciones')); ?>:</b>
	<?php echo CHtml::encode($data->Instrucciones); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cedula_Trabajador')); ?>:</b>
	<?php echo CHtml::encode($data->Cedula_Trabajador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	-->

</div>