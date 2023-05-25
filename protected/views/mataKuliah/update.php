<?php
/* @var $this MataKuliahController */
/* @var $model MataKuliah */

$this->breadcrumbs=array(
	'Mata Kuliah'=>array('index'),
	$model->No_Mk=>array('view','id'=>$model->No_Mk),
	'Update',
);
?>

<h1>Update Mata Kuliah <?php echo $model->No_Mk; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
