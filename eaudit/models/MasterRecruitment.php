<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_recruitment".
 *
 * @property string $id_master
 * @property string $id_unit
 * @property string $periode_recruitment
 * @property string $tanggal_awal
 * @property string $tanggal_akhir
 * @property string $daya_tampungtotal
 *
 * @property DataUnit $unit
 * @property RealisasiRecruitment[] $realisasiRecruitments
 */
class MasterRecruitment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_recruitment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_master'], 'required'],
            [['tanggal_awal', 'tanggal_akhir'], 'safe'],
            [['id_master', 'periode_recruitment'], 'string', 'max' => 15],
            [['id_unit'], 'string', 'max' => 25],
            [['daya_tampungtotal'], 'string', 'max' => 10],
            [['id_master'], 'unique'],
            [['id_unit'], 'exist', 'skipOnError' => true, 'targetClass' => DataUnit::className(), 'targetAttribute' => ['id_unit' => 'id_unit']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_master' => 'Id Master',
            'id_unit' => 'Id Unit',
            'periode_recruitment' => 'Periode Recruitment',
            'tanggal_awal' => 'Tanggal Awal',
            'tanggal_akhir' => 'Tanggal Akhir',
            'daya_tampungtotal' => 'Daya Tampungtotal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(DataUnit::className(), ['id_unit' => 'id_unit']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRealisasiRecruitments()
    {
        return $this->hasMany(RealisasiRecruitment::className(), ['id_master' => 'id_master']);
    }
}
