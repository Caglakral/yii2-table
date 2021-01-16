<?php

namespace Caglakral\models;

use Yii;

/**
 * This is the model class for table "contact_Table".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $contact
 */
class contactTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact_Table';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'email', 'contact'], 'required'],
            [['id'], 'integer'],
            [['contact'], 'string'],
            [['name', 'email'], 'string', 'max' => 30],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Kullanıcı numarası giriniz.',
            'name' => 'Ad Soyad giriniz.',
            'email' => 'E-posta adresinizi giriniz.',
            'contact' => 'Yetkililere iletmek istediğiniz mesajı bu alana giriniz',
        ];
    }
}