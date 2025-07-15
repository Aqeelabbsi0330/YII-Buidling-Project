<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "complaints".
 *
 * @property string $ComplaintID
 * @property string $Titel
 * @property string $Description
 * @property string $Status
 * @property int $UnitID
 * @property string $CreatedAt
 * @property string $UpdatedAt
 * @property int $CreatedBy
 * @property int|null $UpdatedBy
 *
 * @property Users $createdBy
 * @property Unit $unit
 * @property Users $updatedBy
 */
class Complaint extends \yii\db\ActiveRecord
{

    /**
     * ENUM field values
     */
    const STATUS_PENDING = 'Pending';
    const STATUS_IN_PROGRESS = 'In_Progress';
    const STATUS_RESOLVED = 'Resolved';
    const STATUS_CLOSED = 'Closed';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'complaints';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['UpdatedBy'], 'default', 'value' => null],
            [['ComplaintID', 'Titel', 'Description', 'Status', 'UnitID', 'CreatedBy'], 'required'],
            [['Description', 'Status'], 'string'],
            [['UnitID', 'CreatedBy', 'UpdatedBy'], 'integer'],
            [['CreatedAt', 'UpdatedAt'], 'safe'],
            [['ComplaintID'], 'string', 'max' => 20],
            [['Titel'], 'string', 'max' => 100],
            ['Status', 'in', 'range' => array_keys(self::optsStatus())],
            [['ComplaintID'], 'unique'],
            [['CreatedBy'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['CreatedBy' => 'CNIC']],
            [['UpdatedBy'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['UpdatedBy' => 'CNIC']],
            [['UnitID'], 'exist', 'skipOnError' => true, 'targetClass' => Unit::class, 'targetAttribute' => ['UnitID' => 'UnitID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ComplaintID' => 'Complaint ID',
            'Titel' => 'Titel',
            'Description' => 'Description',
            'Status' => 'Status',
            'UnitID' => 'Unit ID',
            'CreatedAt' => 'Created At',
            'UpdatedAt' => 'Updated At',
            'CreatedBy' => 'Created By',
            'UpdatedBy' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(Users::class, ['CNIC' => 'CreatedBy']);
    }

    /**
     * Gets query for [[Unit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(Unit::class, ['UnitID' => 'UnitID']);
    }

    /**
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(Users::class, ['CNIC' => 'UpdatedBy']);
    }


    /**
     * column Status ENUM value labels
     * @return string[]
     */
    public static function optsStatus()
    {
        return [
            self::STATUS_PENDING => 'Pending',
            self::STATUS_IN_PROGRESS => 'In_Progress',
            self::STATUS_RESOLVED => 'Resolved',
            self::STATUS_CLOSED => 'Closed',
        ];
    }

    /**
     * @return string
     */
    public function displayStatus()
    {
        return self::optsStatus()[$this->Status];
    }

    /**
     * @return bool
     */
    public function isStatusPending()
    {
        return $this->Status === self::STATUS_PENDING;
    }

    public function setStatusToPending()
    {
        $this->Status = self::STATUS_PENDING;
    }

    /**
     * @return bool
     */
    public function isStatusInprogress()
    {
        return $this->Status === self::STATUS_IN_PROGRESS;
    }

    public function setStatusToInprogress()
    {
        $this->Status = self::STATUS_IN_PROGRESS;
    }

    /**
     * @return bool
     */
    public function isStatusResolved()
    {
        return $this->Status === self::STATUS_RESOLVED;
    }

    public function setStatusToResolved()
    {
        $this->Status = self::STATUS_RESOLVED;
    }

    /**
     * @return bool
     */
    public function isStatusClosed()
    {
        return $this->Status === self::STATUS_CLOSED;
    }

    public function setStatusToClosed()
    {
        $this->Status = self::STATUS_CLOSED;
    }
}
