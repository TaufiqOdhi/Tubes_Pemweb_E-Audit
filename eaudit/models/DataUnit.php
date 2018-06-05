<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_unit".
 *
 * @property string $id_unit
 * @property string $nama_unit
 * @property string $induk_unit
 *
 * @property DataHakakses[] $dataHakakses
 * @property MasterPerjalanandinas[] $masterPerjalanandinas
 * @property MasterRecruitment[] $masterRecruitments
 * @property MasterTax[] $masterTaxes
 * @property RencanaPendapatan[] $rencanaPendapatans
 */
class DataUnit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_unit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_unit', 'nama_unit', 'induk_unit'], 'required'],
            [['id_unit', 'nama_unit', 'induk_unit'], 'string', 'max' => 25],
            [['id_unit'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_unit' => 'Id Unit',
            'nama_unit' => 'Nama Unit',
            'induk_unit' => 'Induk Unit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDataHakakses()
    {
        return $this->hasMany(DataHakakses::className(), ['id_unit' => 'id_unit']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterPerjalanandinas()
    {
        return $this->hasMany(MasterPerjalanandinas::className(), ['id_unit' => 'id_unit']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterRecruitments()
    {
        return $this->hasMany(MasterRecruitment::className(), ['id_unit' => 'id_unit']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterTaxes()
    {
        return $this->hasMany(MasterTax::className(), ['id_unit' => 'id_unit']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRencanaPendapatans()
    {
        return $this->hasMany(RencanaPendapatan::className(), ['id_unit' => 'id_unit']);
    }
}
