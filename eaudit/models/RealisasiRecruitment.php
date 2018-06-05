<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "realisasi_recruitment".
 *
 * @property string $id_detail
 * @property string $id_master
 * @property int $NIK
 * @property string $nama
 * @property string $nilai
 * @property string $formasi
 * @property string $status_audit
 * @property string $hasil_audit
 *
 * @property MasterRecruitment $master
 */
class RealisasiRecruitment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'realisasi_recruitment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_detail'], 'required'],
            [['NIK'], 'integer'],
            [['id_detail', 'id_master', 'formasi', 'status_audit', 'hasil_audit'], 'string', 'max' => 15],
            [['nama'], 'string', 'max' => 20],
            [['nilai'], 'string', 'max' => 10],
            [['id_detail'], 'unique'],
            [['id_master'], 'exist', 'skipOnError' => true, 'targetClass' => MasterRecruitment::className(), 'targetAttribute' => ['id_master' => 'id_master']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_detail' => 'Id Detail',
            'id_master' => 'Id Master',
            'NIK' => 'Nik',
            'nama' => 'Nama',
            'nilai' => 'Nilai',
            'formasi' => 'Formasi',
            'status_audit' => 'Status Audit',
            'hasil_audit' => 'Hasil Audit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaster()
    {
        return $this->hasOne(MasterRecruitment::className(), ['id_master' => 'id_master']);
    }
}
