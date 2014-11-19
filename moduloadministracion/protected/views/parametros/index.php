<?php
/* @var $this ParametrosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Parametros',
);

$this->menu=array(
	array('label'=>'Crer Parametro', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Parametros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
