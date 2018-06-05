<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_user".
 *
 * @property string $Username
 * @property string $Fullname
 * @property string $Password
 *
 * @property DataHakakses[] $dataHakakses
 * @property MasterPerjalanandinas[] $masterPerjalanandinas
 * @property MasterTax[] $masterTaxes
 */
class DataUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Username', 'Fullname', 'Password'], 'required'],
            [['Username', 'Fullname', 'Password'], 'string', 'max' => 25],
            [['Username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Username' => 'Username',
            'Fullname' => 'Fullname',
            'Password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDataHakakses()
    {
        return $this->hasMany(DataHakakses::className(), ['id_user' => 'Username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterPerjalanandinas()
    {
        return $this->hasMany(MasterPerjalanandinas::className(), ['id_user' => 'Username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterTaxes()
    {
        return $this->hasMany(MasterTax::className(), ['id_user' => 'Username']);
    }
}
