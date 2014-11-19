<?php
/* @var $this PlantillasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Plantillas',
);

$this->menu=array(
	//array('label'=>'Create Plantillas', 'url'=>array('create')),
	array('label'=>'Configurar Plantillas de Notificaciones y Alertas', 'url'=>array('admin')),
);
?>

<h1>Plantillas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
