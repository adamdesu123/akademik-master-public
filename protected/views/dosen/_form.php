<?php
/* @var $this DosenController */
/* @var $model Dosen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dosen-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nip'); ?>
		<?php echo $form->textField($model,'Nip'); ?>
		<?php echo $form->error($model,'Nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama_Dosen'); ?>
		<?php echo $form->textField($model,'Nama_Dsn',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nama_Dsn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tanggal_Lahir'); ?>
		<?php Yii::import('ext.CJuiDateTimePicker.CJuiDateTimePicker');
$this->widget('CJuiDateTimePicker',array(
	 'model'=>$model, //Model object
	 'attribute'=>'Tgl_Lahir', //attribute name
	 'mode'=>'date', //use "time", "date" or "datetime" (default)
	 'language' => '',
	 'options'=>array(
			 'dateFormat'=>'yy-mm-dd',
			//  'minDate' => '0',
		), // jquery plugin options
	'htmlOptions'=>array(
		 'placeholder'=>'ex: 28-02-2014',
	 ),
));
        ?>
		<?php echo $form->error($model,'Tgl_Lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jenis_Kelamin'); ?>
		<?php echo ZHtml::enumDropDownList( $model,'Jenis_Kelamin'); ?>
		<?php echo $form->error($model,'Jenis_Kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Agama'); ?>
		<?php echo ZHtml::enumDropDownList( $model,'Agama'); ?>
		<?php echo $form->error($model,'Agama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Alamat'); ?>
		<?php echo $form->textArea($model,'Alamat',array('cols'=>60,'rows'=>4)); ?>
		<?php echo $form->error($model,'Alamat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
