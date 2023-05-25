<?php
/* @var $this MahasiswaController */
/* @var $data Mahasiswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nim')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Nim), array('view', 'id'=>$data->Nim)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama_Mhs')); ?>:</b>
	<?php echo CHtml::encode($data->Nama_Mhs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tgl_Lahir')); ?>:</b>
	<?php echo CHtml::encode($data->Tgl_Lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Jenis_Kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->Jenis_Kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Agama')); ?>:</b>
	<?php echo CHtml::encode($data->Agama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Alamat')); ?>:</b>
	<?php echo CHtml::encode($data->Alamat); ?>
	<br />


</div>