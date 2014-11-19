<?php
/* @var $this PlantillasController */
/* @var $model Plantillas */

$this->breadcrumbs=array(
	'Plantillas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar Plantillas',
);

$this->menu=array(
	array('label'=>'Listar Plantillas', 'url'=>array('index')),
	//array('label'=>'Create Plantillas', 'url'=>array('create')),
	array('label'=>'View Plantillas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Plantillas', 'url'=>array('admin')),
);
?>

<h1> Modificar Plantilla <?php echo $model->titulo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>