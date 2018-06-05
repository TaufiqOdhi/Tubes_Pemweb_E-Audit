<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_perjalanandinas".
 *
 * @property int $id_master
 * @property string $id_unit
 * @property string $tanggal_input
 * @property string $id_user
 * @property int $tahun_periodeaudit
 *
 * @property DetailPerjalanandinas[] $detailPerjalanandinas
 * @property DataUnit $unit
 * @property DataUser $user
 */
class MasterPerjalanandinas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_perjalanandinas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_master', 'id_unit', 'tanggal_input', 'id_user', 'tahun_periodeaudit'], 'required'],
            [['id_master', 'tahun_periodeaudit'], 'integer'],
            [['tanggal_input'], 'safe'],
            [['id_unit', 'id_user'], 'string', 'max' => 25],
            [['id_master'], 'unique'],
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
            'id_master' => 'Id Master',
            'id_unit' => 'Id Unit',
            'tanggal_input' => 'Tanggal Input',
            'id_user' => 'Id User',
            'tahun_periodeaudit' => 'Tahun Periodeaudit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPerjalanandinas()
    {
        return $this->hasMany(DetailPerjalanandinas::className(), ['id_master' => 'id_master']);
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
