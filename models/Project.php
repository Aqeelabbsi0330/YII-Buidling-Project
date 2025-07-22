<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

class Project extends ActiveRecord
{
    public static function project()
    {
        return 'project';
    }

    public function rules()
    {
        return [
            [['projectName', 'status', 'description'], 'string'],
            [['projectName'], 'string', 'max' => 255],
            [['projectName', 'status', 'description'], 'required'],
            [['projectName',], 'unique'],
            [['created_At', 'updated_At'], 'safe']
        ];
    }
}
