<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronogramas'=>array('index'),
	$model->Descripcion,
);

$this->menu=array(
	array('label'=>'Lista de Cronogramas', 'url'=>array('index')),
	#array('label'=>'Create Cronograma', 'url'=>array('create')),
	array('label'=>'Actualizar Cronograma', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Cronograma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro que desea eliminar este cronograma?')),
	#array('label'=>'Manage Cronograma', 'url'=>array('admin')),
	array('label'=>'Registrar personas que asistieron', 'url'=>array('update2', 'id'=>$model->id)),
);
?>

<h1><font color="#336699">Cronograma: </font> <font color="black"><?php echo $model->Descripcion; ?></font></h1>

<br>

<?php 
$date1=date('Y-m-d');
#echo "----".strtotime($date1);
#echo "<br>";
$date2=$model->Fecha;
#echo "----".strtotime($date2);
#echo "<br>";

if(strtotime($date1)>=strtotime($date2)&&$model->estado==0)
{
	Yii::app()->user->setFlash("warning","Debe realizarse este cronograma");
}
 ?>

<!--
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Descripcion',
		'Fecha',
		'estado',
		'PersonasProgramadas',
		'PersonasAsistieron',
	),
)); ?>-->

<table class="table table-bordered table-striped">
	<tr>
		<td><strong><font color="#336699">Id</font></strong></td>
		<td><?php echo $model->id ?></td>		
	</tr>
	<tr>
		<td><strong><font color="#336699">Descripción</font></strong></td>
		<td><?php echo $model->Descripcion ?></td>
		
	</tr>
	<tr>
		<td><strong><font color="#336699">Fecha de realización</font></strong></td>
		<td><?php echo $model->Fecha ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Numero de personas citadas</font></strong></td>
		<td><?php echo $model->PersonasProgramadas ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Numero de personas que asistieron</font></strong></td>
		<td><?php echo $model->PersonasAsistieron ?></td>
	</tr>

</table>
