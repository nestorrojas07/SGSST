<?php
/* @var $this AfiliacionesController */
/* @var $data Afiliaciones */
?>

<div class="view">

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

</div>