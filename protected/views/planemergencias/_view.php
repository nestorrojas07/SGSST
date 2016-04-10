<?php
/* @var $this PlanemergenciasController */
/* @var $data Planemergencias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdPlan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdPlan), array('view', 'id'=>$data->IdPlan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Plan')); ?>:</b>
	<?php echo CHtml::encode($data->Plan); ?>
	<br />


</div>