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


</div>