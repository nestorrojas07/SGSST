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
			<!--
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('IdBrigada')); ?>:</font></strong></b>
			<font color="black"><?php echo CHtml::encode($data->IdBrigada); ?></font>		
			-->	
			
		</h4>
	</div>

	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('IdBrigada')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdBrigada), array('view', 'id'=>$data->IdBrigada)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Funcion')); ?>:</b>
	<?php echo CHtml::encode($data->Funcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion_funcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion_funcion); ?>
	<br />-->


</div>