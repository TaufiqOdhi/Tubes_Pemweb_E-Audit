<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "realisasi_pendapatan".
 *
 * @property string $id_realisasipendapatan
 * @property string $id_rencana
 * @property string $tahun
 * @property string $triwulanke
 * @property string $jenis_pendapatan
 * @property string $jumlah_pendapatan
 *
 * @property RencanaPendapatan $rencana
 */
class RealisasiPendapatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'realisasi_pendapatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_realisasipendapatan', 'id_rencana'], 'required'],
            [['tahun'], 'safe'],
            [['id_realisasipendapatan', 'id_rencana', 'triwulanke', 'jenis_pendapatan', 'jumlah_pendapatan'], 'string', 'max' => 15],
            [['id_realisasipendapatan'], 'unique'],
            [['id_rencana'], 'exist', 'skipOnError' => true, 'targetClass' => RencanaPendapatan::className(), 'targetAttribute' => ['id_rencana' => 'id_rencanapendapatan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_realisasipendapatan' => 'Id Realisasipendapatan',
            'id_rencana' => 'Id Rencana',
            'tahun' => 'Tahun',
            'triwulanke' => 'Triwulanke',
            'jenis_pendapatan' => 'Jenis Pendapatan',
            'jumlah_pendapatan' => 'Jumlah Pendapatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRencana()
    {
        return $this->hasOne(RencanaPendapatan::className(), ['id_rencanapendapatan' => 'id_rencana']);
    }
}
