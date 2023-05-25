<?php
/* @var $this MataKuliahController */
/* @var $model MataKuliah */

$this->breadcrumbs=array(
	'Mata Kuliah'=>array('index'),
	'Create',
);
?>

<h1>Create Mata Kuliah</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
