<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rencana_pendapatan".
 *
 * @property string $id_rencanapendapatan
 * @property int $tahun
 * @property string $id_unit
 * @property string $triwulanke
 * @property string $jenis_pendapatan
 * @property string $jumlah_pendapatan
 *
 * @property RealisasiPendapatan[] $realisasiPendapatans
 * @property DataUnit $unit
 */
class RencanaPendapatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rencana_pendapatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_rencanapendapatan'], 'required'],
            [['tahun'], 'integer'],
            [['id_rencanapendapatan', 'triwulanke', 'jenis_pendapatan'], 'string', 'max' => 15],
            [['id_unit'], 'string', 'max' => 25],
            [['jumlah_pendapatan'], 'string', 'max' => 20],
            [['id_rencanapendapatan'], 'unique'],
            [['id_unit'], 'exist', 'skipOnError' => true, 'targetClass' => DataUnit::className(), 'targetAttribute' => ['id_unit' => 'id_unit']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rencanapendapatan' => 'Id Rencanapendapatan',
            'tahun' => 'Tahun',
            'id_unit' => 'Id Unit',
            'triwulanke' => 'Triwulanke',
            'jenis_pendapatan' => 'Jenis Pendapatan',
            'jumlah_pendapatan' => 'Jumlah Pendapatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRealisasiPendapatans()
    {
        return $this->hasMany(RealisasiPendapatan::className(), ['id_rencana' => 'id_rencanapendapatan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(DataUnit::className(), ['id_unit' => 'id_unit']);
    }
}
