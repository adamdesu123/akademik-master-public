<?php

/**
 * This is the model class for table "tbl_mata_kuliah".
 *
 * The followings are the available columns in table 'tbl_mata_kuliah':
 * @property integer $No_Mk
 * @property string $Nama_Mk
 * @property integer $Sks
 *
 * The followings are the available model relations:
 * @property TblNilai[] $tblNilais
 */
class MataKuliah extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_mata_kuliah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('No_Mk, Nama_Mk, Sks', 'required'),
			array('No_Mk, Sks', 'numerical', 'integerOnly'=>true),
			array('No_Mk', 'unique', 'message'=>'No.Mk Already Exist!'),
			array('Nama_Mk', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('No_Mk, Nama_Mk, Sks', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tblNilais' => array(self::HAS_MANY, 'TblNilai', 'No_Mk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'No_Mk' => 'No Mk',
			'Nama_Mk' => 'Nama Mk',
			'Sks' => 'Sks',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('No_Mk',$this->No_Mk);
		$criteria->compare('Nama_Mk',$this->Nama_Mk,true);
		$criteria->compare('Sks',$this->Sks);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MataKuliah the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
