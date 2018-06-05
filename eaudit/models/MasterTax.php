<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_tax".
 *
 * @property int $id_mastertax
 * @property string $id_unit
 * @property string $tanggal_input
 * @property string $id_user
 * @property int $tahun_periodeaudit
 *
 * @property DetailTax[] $detailTaxes
 * @property DataUnit $unit
 * @property DataUser $user
 */
class MasterTax extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_tax';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mastertax', 'id_unit', 'tanggal_input', 'id_user', 'tahun_periodeaudit'], 'required'],
            [['id_mastertax', 'tahun_periodeaudit'], 'integer'],
            [['tanggal_input'], 'safe'],
            [['id_unit', 'id_user'], 'string', 'max' => 25],
            [['id_mastertax'], 'unique'],
            [['id_unit'], 'exist', 'skipOnError' => true, 'targetClass' => DataUnit::className(), 'targetAttribute' => ['id_unit' => 'id_unit']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => DataUser::className(), 'targetAttribute' => ['id_user' => 'Username']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mastertax' => 'Id Mastertax',
            'id_unit' => 'Id Unit',
            'tanggal_input' => 'Tanggal Input',
            'id_user' => 'Id User',
            'tahun_periodeaudit' => 'Tahun Periodeaudit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTaxes()
    {
        return $this->hasMany(DetailTax::className(), ['id_master' => 'id_mastertax']);
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
    public function getUser()
    {
        return $this->hasOne(DataUser::className(), ['Username' => 'id_user']);
    }
}
