<?php
/* @var $this BrigadaController */
/* @var $data Brigada */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdBrigada')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdBrigada), array('view', 'id'=>$data->IdBrigada)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Funcion')); ?>:</b>
	<?php echo CHtml::encode($data->Funcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion_funcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion_funcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdPlanEmergencias')); ?>:</b>
	<?php echo CHtml::encode($data->IdPlanEmergencias); ?>
	<br />


</div>