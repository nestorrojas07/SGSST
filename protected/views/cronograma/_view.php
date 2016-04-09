<?php
/* @var $this CronogramaController */
/* @var $data Cronograma */
?>

<div class="media">


	<div class="media body">
		<h4 class="media heading">
			<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
			<b><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></b>
			<br>
			<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
			<small><b><?php echo CHtml::encode($data->Descripcion); ?></b></small>
			<br>
			<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
			<small><b><?php echo CHtml::encode($data->Fecha); ?></b></small>-->

			
			
			<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
			<small><b><?php echo Chtml::link(CHtml::encode($data->Descripcion), array('view','id'=>$data->id)); ?></b></font></small> 

			<!--<a href="<?php echo $this->createUrl("enabled",array("id"=>$data->id));?>"> -->

				<span class="label label-<?php echo $data->estado==0?"success":"warning";?>"><?php echo $data->estado==0?"Habilitado":"Desabilitado" ?></span>

			<!--</a>-->
			<br>
			<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
			<small><b><?php echo CHtml::encode($data->Fecha); ?></b></small>
			<br>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
			<small><b><?php echo CHtml::encode($data->id); ?></b></small>
			<br>

			

		</h4>
	</div>


<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

-->
</div>