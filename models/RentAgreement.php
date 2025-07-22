<?php

namespace app\models;

use yii\db\ActiveRecord;

class RentAgreement extends ActiveRecord
{
    public static function tableName()
    {
        return 'rent_agreement';
    }

    public function rules()
    {
        return [
            [['rentalType', 'rentAmount', 'paymentType', 'userType'], 'required'],
            [['created_At', 'updated_At'], 'safe'],
            [['incrementType', 'userType'], 'string'],
            [['incrementPercentage'], 'number'],
            [['incrementType'], 'string', 'max' => 30],
            [['userType'], 'string', 'max' => 20],
            [['userData'], 'string']
        ];
    }
}
