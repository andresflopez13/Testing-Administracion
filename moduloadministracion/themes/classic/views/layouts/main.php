<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo $this->pageTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/responsive.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/yii.css" rel="stylesheet">
</head>

<body>
<div class="row">
  <div class="span8">
    <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/logo.png">
  </div>

</div>

<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    <div class="nav-collapse collapse pull-right">
        <?php $this->widget('zii.widgets.CMenu',array(
          'htmlOptions'=>array("class"=>"nav"),
          'items'=>array(
          	array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
    		array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Home', 'url'=>array('/site/index')),
            array('label'=>'Organizaciones', 'url'=>array('/organizaciones/index')),
            array('label'=>'Pares Evaluadores', 'url'=>array('/investigador/index')),
            array('label'=>'Lista de parametros', 'url'=>array('/parametros/admin')),
            array('label'=>'Lista de plantillas', 'url'=>array('/plantillas/index')),
            array('label'=>'Contactanos', 'url'=>array('/site/contact'))
          ),
        )); ?>

    </div><!--/.nav-collapse -->

    </div>
  </div>
</div>

<div class="container" id="page">
<!-- Barra menu -->	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
</div><!-- page -->

<!-- Pie de pagina -->
<div class="container">
	<br>
	<div id="footer" class="centrar">
			Copyright &copy; <?php echo date('Y'); ?> by COLCIENCIAS.<br/>
			All Rights Reserved.<br/>
	</div><!-- footer -->
</div>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.js"></script>
  	<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap.min.js"></script>
</body>
</html>
