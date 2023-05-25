<?php
/* @var $this NilaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nilai',
);

$this->menu=array(
	array('label'=>'Create Nilai', 'url'=>array('create')),
	array('label'=>'Manage Nilai', 'url'=>array('admin')),
);
?>

<h1>Nilai</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
