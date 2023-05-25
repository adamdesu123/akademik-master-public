<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainMbmenu">
		<?php

		if (Yii::app()->user->isGuest) {
	              $this->widget('application.extensions.mbmenu.MbMenu',array(
	              'activeCssClass' => 'active',
	              'activateParents' => true,
	              'items'=>array(
	                    array('label'=>'Home', 'url'=>array('/site/index')),
			    						array('label'=>'Login', 'url'=>array('/site/login')),
	                            ),
	                        ));
	                    } else {
	                        $this->widget('application.extensions.mbmenu.MbMenu',array(
	                            'activeCssClass' => 'active',
	                            'activateParents' => true,
	                            'items'=>array(
	                            	array('label'=>'Mahasiswa',
																'url'=>array('/mahasiswa/index'),
																'items'=>array(
																		array('label'=>'Manage Mahasiswa', 'url'=>array('/mahasiswa/admin')),
																		array('label'=>'Create Mahasiswa', 'url'=>array('/mahasiswa/create')),
																),
															),
																array('label'=>'Dosen',
																'url'=>array('/dosen/index'),
																'items'=>array(
																		array('label'=>'Manage Dosen', 'url'=>array('/dosen/admin')),
																		array('label'=>'Create Dosen', 'url'=>array('/dosen/create')),
																),
															),
															array('label'=>'Mata Kuliah',
															'url'=>array('/mataKuliah/index'),
															'items'=>array(
																	array('label'=>'Manage Mata Kuliah', 'url'=>array('/mataKuliah/admin')),
																	array('label'=>'Create Mata Kuliah', 'url'=>array('/mataKuliah/create')),
															),
														),
														array('label'=>'Nilai Mahasiswa',
														'url'=>array('/nilai/index'),
														'items'=>array(
																array('label'=>'Manage Nilai', 'url'=>array('/nilai/admin')),
																array('label'=>'Create Nilai', 'url'=>array('/nilai/create')),
														),
													),
																array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'))
	                            ),
	                        ));
	                    }

	?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
