<?php
/* @var $this NilaiController */
/* @var $model Nilai */

$this->breadcrumbs=array(
	'Nilai'=>array('index'),
	$model->Nim=>array('view','id'=>$model->Nim),
	'Update',
);
?>

<h1>Update Nilai <?php echo $model->Nim; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
