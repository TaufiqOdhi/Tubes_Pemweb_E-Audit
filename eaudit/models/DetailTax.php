<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_tax".
 *
 * @property int $id_detail
 * @property int $id_master
 * @property int $NIP
 * @property string $golongan
 * @property int $penghasilan
 * @property int $pajak
 * @property string $tanggal_penerimaanpenghasilan
 * @property string $status_audit
 *
 * @property MasterTax $master
 */
class DetailTax extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_tax';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_detail', 'id_master', 'NIP', 'golongan', 'penghasilan', 'pajak', 'tanggal_penerimaanpenghasilan', 'status_audit'], 'required'],
            [['id_detail', 'id_master', 'NIP', 'penghasilan', 'pajak'], 'integer'],
            [['tanggal_penerimaanpenghasilan'], 'safe'],
            [['golongan'], 'string', 'max' => 10],
            [['status_audit'], 'string', 'max' => 15],
            [['id_detail'], 'unique'],
            [['id_master'], 'exist', 'skipOnError' => true, 'targetClass' => MasterTax::className(), 'targetAttribute' => ['id_master' => 'id_mastertax']],
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
            'NIP' => 'Nip',
            'golongan' => 'Golongan',
            'penghasilan' => 'Penghasilan',
            'pajak' => 'Pajak',
            'tanggal_penerimaanpenghasilan' => 'Tanggal Penerimaanpenghasilan',
            'status_audit' => 'Status Audit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaster()
    {
        return $this->hasOne(MasterTax::className(), ['id_mastertax' => 'id_master']);
    }
}
