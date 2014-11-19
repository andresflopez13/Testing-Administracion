<?php

/**
 * This is the model class for table "investigador".
 *
 * The followings are the available columns in table 'investigador':
 * @property string $Nombres
 * @property string $Apellidos
 * @property string $Tipo_Documento
 * @property integer $Numero_Documento
 * @property string $Nacionalidad
 * @property string $Datos_contacto
 * @property integer $Evaluador
 * @property string $justificacion
 * @property string $Hoja_vida
 */
class Investigador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'investigador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombres, Apellidos, Tipo_Documento, Numero_Documento, Nacionalidad, Datos_contacto', 'required'),
			array('Numero_Documento, Evaluador', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Nombres, Apellidos, Tipo_Documento, Numero_Documento, Nacionalidad, Datos_contacto, Evaluador, justificacion', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Nombres' => 'Nombres',
			'Apellidos' => 'Apellidos',
			'Tipo_Documento' => 'Tipo Documento',
			'Numero_Documento' => 'Numero Documento',
			'Nacionalidad' => 'Nacionalidad',
			'Datos_contacto' => 'Datos Contacto',
			'Evaluador' => 'Evaluador',
                        'justificacion' => 'justificacion',
                        'Hoja_vida' => 'Hoja_vida',
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

		$criteria->compare('Nombres',$this->Nombres,true);
		$criteria->compare('Apellidos',$this->Apellidos,true);
		$criteria->compare('Tipo_Documento',$this->Tipo_Documento,true);
		$criteria->compare('Numero_Documento',$this->Numero_Documento);
		$criteria->compare('Nacionalidad',$this->Nacionalidad,true);
		$criteria->compare('Datos_contacto',$this->Datos_contacto,true);
		$criteria->compare('Evaluador',$this->Evaluador);
                $criteria->compare('justificacion',$this->justificacion);
                $criteria->compare('Hoja_vida',$this->Hoja_vida);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Investigador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
