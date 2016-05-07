<?php
/* @var $this HistoriaclinicaController */
/* @var $data Historiaclinica */
?>

<div class="view">


	<div class="media body">
		<h4 class="media heading">
			
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Cedula del trabajador')); ?>:</font></strong></b>
			<small><?php echo CHtml::link(CHtml::encode($data->Cedula_trabajador), array('view', 'id'=>$data->Id)); ?></small>
			<br>
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</font></strong></b>
			<font color="black"><?php echo CHtml::encode($data->Descripcion); ?></font>
			
			
		</h4>
	</div>


</div>