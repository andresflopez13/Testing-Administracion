<?php
/* @var $this InvestigadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Investigadores',
);

$this->menu=array(
//	array('label'=>'Create Investigador', 'url'=>array('create')),
	array('label'=>'Registrar investigador como Evaluador', 'url'=>array('admin')),
);
?>

<h1>Investigadores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
