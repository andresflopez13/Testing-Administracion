<?php
/* @var $this PlantillasController */
/* @var $model Plantillas */

$this->breadcrumbs=array(
	'Plantillas'=>array('index'),
	'Crear Plantilla',
);

$this->menu=array(
	array('label'=>'List Plantillas', 'url'=>array('index')),
	array('label'=>'Manage Plantillas', 'url'=>array('admin')),
);
?>

<h1>Crear Plantillas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>