<?php
/* @var $this ParametrosController */
/* @var $model Parametros */

$this->breadcrumbs=array(
	'Parametros'=>array('index'),
	'Crear Parametro',
);

$this->menu=array(
	//array('label'=>'List Parametros', 'url'=>array('index')),
	array('label'=>'Administrar Parametros', 'url'=>array('admin')),
);
?>

<h1>Crear Parametro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>