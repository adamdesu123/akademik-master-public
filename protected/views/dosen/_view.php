<?php
/* @var $this DosenController */
/* @var $data Dosen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nip')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Nip), array('view', 'id'=>$data->Nip)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama_Dsn')); ?>:</b>
	<?php echo CHtml::encode($data->Nama_Dsn); ?>
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