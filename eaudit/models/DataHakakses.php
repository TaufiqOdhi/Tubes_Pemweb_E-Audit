<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_hakakses".
 *
 * @property string $id
 * @property string $id_user
 * @property string $id_unit
 * @property string $Tanggal_hak_akses
 *
 * @property DataUnit $unit
 * @property DataUser $user
 */
class DataHakakses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_hakakses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_user', 'id_unit', 'Tanggal_hak_akses'], 'required'],
            [['Tanggal_hak_akses'], 'safe'],
            [['id', 'id_user', 'id_unit'], 'string', 'max' => 25],
            [['id'], 'unique'],
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
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_unit' => 'Id Unit',
            'Tanggal_hak_akses' => 'Tanggal Hak Akses',
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
    public function getUser()
    {
        return $this->hasOne(DataUser::className(), ['Username' => 'id_user']);
    }
}
