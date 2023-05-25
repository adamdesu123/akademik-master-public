<?php
/* @var $this MataKuliahController */
/* @var $data MataKuliah */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('No_Mk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->No_Mk), array('view', 'id'=>$data->No_Mk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama_Mk')); ?>:</b>
	<?php echo CHtml::encode($data->Nama_Mk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sks')); ?>:</b>
	<?php echo CHtml::encode($data->Sks); ?>
	<br />


</div>