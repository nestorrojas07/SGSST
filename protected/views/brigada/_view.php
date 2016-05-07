<?php
/* @var $this BrigadaController */
/* @var $data Brigada */
?>

<div class="view">
	<div class="media body">
		<h4 class="media heading">
			
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Funcion')); ?>:</font></strong></b>
			<small><?php echo CHtml::link(CHtml::encode($data->Funcion), array('view', 'id'=>$data->IdBrigada)); ?></small>
			<br>
			
		</h4>
	</div>
</div>