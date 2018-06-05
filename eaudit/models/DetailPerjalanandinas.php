<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_perjalanandinas".
 *
 * @property int $id_detail
 * @property int $id_master
 * @property string $nama_maskapai
 * @property string $nomor_tiket
 * @property string $flight_number
 * @property string $origin
 * @property string $ticket_class
 * @property string $destination
 * @property int $harga_total
 * @property int $best_fare
 * @property string $status_audit
 * @property string $tanggal_keberangkatan
 * @property string $keterangan_audit
 *
 * @property MasterPerjalanandinas $master
 */
class DetailPerjalanandinas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_perjalanandinas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_detail', 'id_master', 'nama_maskapai', 'nomor_tiket', 'flight_number', 'origin', 'ticket_class', 'destination', 'harga_total', 'best_fare', 'status_audit', 'tanggal_keberangkatan', 'keterangan_audit'], 'required'],
            [['id_detail', 'id_master', 'harga_total', 'best_fare'], 'integer'],
            [['tanggal_keberangkatan'], 'safe'],
            [['nama_maskapai', 'flight_number', 'ticket_class', 'status_audit', 'keterangan_audit'], 'string', 'max' => 15],
            [['nomor_tiket'], 'string', 'max' => 10],
            [['origin', 'destination'], 'string', 'max' => 25],
            [['id_detail'], 'unique'],
            [['id_master'], 'exist', 'skipOnError' => true, 'targetClass' => MasterPerjalanandinas::className(), 'targetAttribute' => ['id_master' => 'id_master']],
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
            'nama_maskapai' => 'Nama Maskapai',
            'nomor_tiket' => 'Nomor Tiket',
            'flight_number' => 'Flight Number',
            'origin' => 'Origin',
            'ticket_class' => 'Ticket Class',
            'destination' => 'Destination',
            'harga_total' => 'Harga Total',
            'best_fare' => 'Best Fare',
            'status_audit' => 'Status Audit',
            'tanggal_keberangkatan' => 'Tanggal Keberangkatan',
            'keterangan_audit' => 'Keterangan Audit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaster()
    {
        return $this->hasOne(MasterPerjalanandinas::className(), ['id_master' => 'id_master']);
    }
}
