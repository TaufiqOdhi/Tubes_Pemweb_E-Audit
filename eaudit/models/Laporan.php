<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "laporan".
 *
 * @property string $periode
 * @property int $belum_validasi
 * @property int $tidak_valid
 * @property int $valid
 * @property int $jumlah
 */
class Laporan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'laporan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['periode', 'belum_validasi', 'tidak_valid', 'valid', 'jumlah'], 'required'],
            [['belum_validasi', 'tidak_valid', 'valid', 'jumlah'], 'integer'],
            [['periode'], 'string', 'max' => 25],
            [['periode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'periode' => 'Periode',
            'belum_validasi' => 'Belum Validasi',
            'tidak_valid' => 'Tidak Valid',
            'valid' => 'Valid',
            'jumlah' => 'Jumlah',
        ];
    }
}
