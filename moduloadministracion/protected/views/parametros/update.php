<?php
/* @var $this ParametrosController */
/* @var $model Parametros */

$this->breadcrumbs=array(
	'Parametros'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar Parametro',
);

$this->menu=array(
	//array('label'=>'List Parametros', 'url'=>array('index')),
	//array('label'=>'Create Parametros', 'url'=>array('create')),
	//array('label'=>'View Parametros', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Parametros', 'url'=>array('admin')),
);
?>

<h1>Actualizar Parametros <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>