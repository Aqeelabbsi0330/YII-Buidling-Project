<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "users".
 *
 */
class User extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }
    // public function behaviors()
    // {
    // return [
    //     [
    //     'class'=>TimestampBehavior::class,
    //         'createdAtAttribute' => 'created_At',
    //         'updatedAtAttribute' => 'updated_At',
    //     //     'value' => function () {
    //     //     return time(); // current UNIX timestamp
    //     // },
    //     ],
    //    [
    //     'class'=> BlameableBehavior::class,
    //         'createdByAttribute' => 'created_By',
    //         'updatedByAttribute' => 'updated_By',
    //         // 'value' => function () {
    //         //     return Yii::$app->user->id; // current user ID
    //         // },
    //    ]
    //     ];
    // }

    public function rules()
    {
        return [
            [['cnic', 'email', 'userPassword', 'phoneNumber', 'province', 'district', 'city', 'address'], 'required'],
            [['cnic'], 'string', 'length' => 13],
            [['cnic'], 'unique', 'message' => 'This CNIC is already registered.'],
            [['email'], 'email'],
            [['email'], 'unique', 'message' => 'This email is already registered.'],
            [['email'], 'string', 'max' => 50],
            [['userPassword'], 'string', 'max' => 100],
            [['phoneNumber'], 'string', 'max' => 13],
            [['province', 'district', 'city'], 'string', 'max' => 30],
            [['address'], 'string', 'max' => 255],
            [['created_At', 'updated_At'], 'safe'],
            [['created_By', 'updated_By'], 'integer'],
        ];
    }
    public function BeforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            // sirf naya record ho ya password change hua ho to hash karo
            if ($this->isAttributeChanged('userPassword')) {
                $this->userPassword = Yii::$app->security->generatePasswordHash($this->userPassword);
            }
            return true;
        }
        return false;
    }
}
