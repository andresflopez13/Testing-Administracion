<?php
/* @var $this OrganizacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Organizaciones',
);

$this->menu=array(
	//array('label'=>'Create Organizaciones', 'url'=>array('create')),
	array('label'=>'Validar Organizaciones', 'url'=>array('admin')),
);
?>

<h1>Organizaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
