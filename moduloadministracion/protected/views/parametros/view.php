<?php
/* @var $this ParametrosController */
/* @var $model Parametros */

$this->breadcrumbs=array(
	'Parametros'=>array('index'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'List Parametros', 'url'=>array('index')),
	array('label'=>'Crear Parametro', 'url'=>array('create')),
	//array('label'=>'Update Parametros', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Parametros', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Este seguro de eliminar este parametro?')),
	array('label'=>'Administrar Parametros', 'url'=>array('admin')),
);
?>

<h1> Parametro #<?php echo $model->Nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Nombre',
		'Valor',
	),
)); ?>
