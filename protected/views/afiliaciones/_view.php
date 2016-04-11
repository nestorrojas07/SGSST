<?php
/* @var $this AfiliacionesController */
/* @var $data Afiliaciones */
?>

<div class="view">

<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />-->


	<div class="view">


		<div class="media body">
			<h4 class="media heading">
				
				<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</font></strong></b>
				<small><?php echo CHtml::link(CHtml::encode($data->Nombre), array('view', 'id'=>$data->Id)); ?></small>
				<br>
				<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</font></strong></b>
				<font color="black"><?php echo CHtml::encode($data->Descripcion); ?></font>
				
				
			</h4>
		</div>
	</div>
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />-->


</div>