<?php
/* @var $this NilaiController */
/* @var $data Nilai */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nim')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Nim), array('view', 'id'=>$data->Nim)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nip')); ?>:</b>
	<?php echo CHtml::encode($data->Nip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('No_Mk')); ?>:</b>
	<?php echo CHtml::encode($data->No_Mk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tanggal_Ujian')); ?>:</b>
	<?php echo CHtml::encode($data->Tgl_Ujian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Jenis_Ujian')); ?>:</b>
	<?php echo CHtml::encode($data->Jenis_Ujian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ruangan')); ?>:</b>
	<?php echo CHtml::encode($data->Ruangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nilai')); ?>:</b>
	<?php echo CHtml::encode($data->Nilai); ?>
	<br />


</div>
