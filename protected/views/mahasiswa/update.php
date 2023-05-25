<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */

$this->breadcrumbs=array(
	'Mahasiswa'=>array('index'),
	$model->Nim=>array('view','id'=>$model->Nim),
	'Update',
);
?>

<h1>Update Mahasiswa <?php echo $model->Nim; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
