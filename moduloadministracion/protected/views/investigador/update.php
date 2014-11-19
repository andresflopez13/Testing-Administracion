<?php
/* @var $this InvestigadorController */
/* @var $model Investigador */

$this->breadcrumbs=array(
	'Investigadors'=>array('index'),
	$model->Numero_Documento=>array('view','id'=>$model->Numero_Documento),
	'Update',
);

$this->menu=array(
//	array('label'=>'List Investigador', 'url'=>array('index')),
//	array('label'=>'Create Investigador', 'url'=>array('create')),
	array('label'=>'Investigadores', 'url'=>array('view', 'id'=>$model->Numero_Documento)),
	array('label'=>'Modificar Investigador', 'url'=>array('admin')),
);
?>

<h1>Registrar Investigador como Evaluador <?php echo $model->Numero_Documento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>