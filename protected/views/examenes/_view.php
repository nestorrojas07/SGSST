<?php
/* @var $this ExamenesController */
/* @var $data Examenes */
?>

<div class="view">


	<div class="media body">
		<h4 class="media heading">
			
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Tipo')); ?>:</font></strong></b>
			<small><?php echo CHtml::link(CHtml::encode($data->Tipo), array('view', 'id'=>$data->id)); ?></small>
			<br>
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</font></strong></b>
			<font color="black"><?php echo CHtml::encode($data->Fecha); ?></font>			
			
		</h4>
	</div>

	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Diagnostico')); ?>:</b>
	<?php echo CHtml::encode($data->Diagnostico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdHistoriaClinica')); ?>:</b>
	<?php echo CHtml::encode($data->IdHistoriaClinica); ?>
	<br />-->


</div>