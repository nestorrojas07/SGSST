<div class="view">

	<div class="media body">
		<h4 class="media heading">
			
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Cedula del trabajador')); ?>:</font></strong></b>
			<small><?php echo CHtml::link(CHtml::encode($data->Cedula),array('trabajador/view', 'id'=>$data->Cedula)); ?></small>
			<br>
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Afiliacion')); ?>:</font></strong></b>
			<small><?php echo CHtml::link(CHtml::encode($data->getNombreAfiliacion()),array('afiliaciones/view', 'id'=>$data->IdAfiliaciones)); ?></small>
			<br>
			<?php  echo CHtml::linkButton('Remover afiliación',array(
            	'href'=>Yii::app()->createUrl('trabajadorAfiliaciones/delete',array(
                'id'=>$data->IdAfiliaciones, 
                'cedula'=>$data->Cedula)
            ),"class"=>"btn btn-primary btn-small",'confirm'=>'Seguro que desea remover la afiliacion entre '.$data->getNombreAfiliacion().' y '.$data->Cedula
         )); ?>
			<br>

			<br>

		</h4>
	</div>
</div>