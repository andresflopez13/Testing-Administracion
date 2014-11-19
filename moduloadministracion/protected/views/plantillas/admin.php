<?php
/* @var $this PlantillasController */
/* @var $model Plantillas */

$this->breadcrumbs=array(
	'Plantillas'=>array('index'),
	'Administrar Plantillas',
);

$this->menu=array(
	array('label'=>'Listar Plantillas', 'url'=>array('index')),
	//array('label'=>'Create Plantillas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#plantillas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Plantillas de notificaciones y alertas</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'plantillas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'titulo',
		'descripcion',
		'texto',
		/*
                'enlaces',
		'imagenes',
		
		'fecha',
		'notificacion',
		'alerta',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
