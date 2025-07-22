<?php

namespace app\models;

use Yii;



class Complaint extends \yii\db\ActiveRecord
{

    /**
     * ENUM field values
     */
    // const STATUS_PENDING = 'Pending';
    // const STATUS_IN_PROGRESS = 'In_Progress';
    // const STATUS_RESOLVED = 'Resolved';
    // const STATUS_CLOSED = 'Closed';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'complaint';
    }

    public function rules()
    {
        return [
            [['updatedBy'], 'default', 'value' => null],
            [['title', 'description', 'status'], 'required'],
            [['description', 'status'], 'string'],
            [['createdBy', 'updatedBy'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['title'], 'string', 'max' => 100],

        ];
    }
}
