<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

class Utility_bill extends ActiveRecord
{
    public static function tableName()
    {
        return 'utility_bill';
    }

    public function rules()
    {
        return [
            [['amount'], 'required'],
            [['created_At', 'updated_At'], 'safe'],
            [['billType', 'amount', 'billMonth', 'dueDate', 'paymentDate', 'paidStatus'], 'string'],
            [['billType'], 'string', 'max' => 30],
            [['amount'], 'number'],
            [['billMonth'], 'string', 'max' => 20],

        ];
    }
}
