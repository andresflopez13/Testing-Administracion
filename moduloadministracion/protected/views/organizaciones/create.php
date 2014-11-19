<?php
/* @var $this OrganizacionesController */
/* @var $model Organizaciones */

$this->breadcrumbs=array(
	'Organizaciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Organizaciones', 'url'=>array('index')),
	array('label'=>'Manage Organizaciones', 'url'=>array('admin')),
);
?>

<h1>Create Organizaciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>