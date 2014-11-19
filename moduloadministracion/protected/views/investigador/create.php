<?php
/* @var $this InvestigadorController */
/* @var $model Investigador */

$this->breadcrumbs=array(
	'Investigadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Investigador', 'url'=>array('index')),
	array('label'=>'Registrar como Evaluador', 'url'=>array('admin')),
);
?>

<h1>Registrar Investigador como Evaluador  </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>