<?php

/**
 * This is the model class for table "tbl_nilai".
 *
 * The followings are the available columns in table 'tbl_nilai':
 * @property integer $Nim
 * @property integer $Nip
 * @property integer $No_Mk
 * @property string $Tgl_Ujian
 * @property string $Jenis_Ujian
 * @property string $Ruangan
 * @property integer $Nilai
 *
 * The followings are the available model relations:
 * @property TblMahasiswa $nim
 * @property TblDosen $nip
 * @property TblMataKuliah $noMk
 */
class Nilai extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	 public function primaryKey(){
 		return 'Nim';
 	}
	public function tableName()
	{
		return 'tbl_nilai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nim, Nip, No_Mk, Tgl_Ujian, Jenis_Ujian, Ruangan, Nilai', 'required'),
			array('Nim, Nip, No_Mk, Nilai', 'numerical', 'integerOnly'=>true),
			array('Jenis_Ujian', 'length', 'max'=>3),
			array('Ruangan', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Nim, Nip, No_Mk, Tgl_Ujian, Jenis_Ujian, Ruangan, Nilai', 'safe', 'on'=>'search'),
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
			'nim' => array(self::BELONGS_TO, 'TblMahasiswa', 'Nim'),
			'nip' => array(self::BELONGS_TO, 'TblDosen', 'Nip'),
			'noMk' => array(self::BELONGS_TO, 'TblMataKuliah', 'No_Mk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Nim' => 'Nim',
			'Nip' => 'Nip',
			'No_Mk' => 'No Mk',
			'Tgl_Ujian' => 'Tgl Ujian',
			'Jenis_Ujian' => 'Jenis Ujian',
			'Ruangan' => 'Ruangan',
			'Nilai' => 'Nilai',
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

		$criteria->compare('Nim',$this->Nim);
		$criteria->compare('Nip',$this->Nip);
		$criteria->compare('No_Mk',$this->No_Mk);
		$criteria->compare('Tgl_Ujian',$this->Tgl_Ujian,true);
		$criteria->compare('Jenis_Ujian',$this->Jenis_Ujian,true);
		$criteria->compare('Ruangan',$this->Ruangan,true);
		$criteria->compare('Nilai',$this->Nilai);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Nilai the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
