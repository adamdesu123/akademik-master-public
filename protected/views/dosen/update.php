<?php
/* @var $this DosenController */
/* @var $model Dosen */

$this->breadcrumbs=array(
	'Dosen'=>array('index'),
	$model->Nip=>array('view','id'=>$model->Nip),
	'Update',
);
?>

<h1>Update Dosen <?php echo $model->Nip; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
