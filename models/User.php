<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $CNIC
 * @property string $Email
 * @property string $UserPassword
 * @property string $PhoneNumber
 * @property string $Province
 * @property string $District
 * @property string $City
 * @property string $Address
 * @property string $CreatedAt
 * @property string $UpdatedAt
 *
 * @property Complaints[] $complaints
 * @property Complaints[] $complaints0
 * @property Discountrequest[] $discountrequests
 * @property Discountrequest[] $discountrequests0
 * @property Documents[] $documents
 * @property Notice[] $notices
 * @property Notice[] $notices0
 * @property Notice[] $notices1
 * @property Projectmembers[] $projectmembers
 * @property Project[] $projects
 * @property Project[] $projects0
 * @property Project[] $projects1
 * @property Unit[] $units
 * @property Usernotice[] $usernotices
 * @property Utilitybills[] $utilitybills
 * @property Utilitybills[] $utilitybills0
 */
class User extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CNIC', 'Email', 'UserPassword', 'PhoneNumber', 'Province', 'District', 'City', 'Address'], 'required'],
            [['CNIC'], 'integer'],
            [['CreatedAt', 'UpdatedAt'], 'safe'],
            [['Email'], 'string', 'max' => 40],
            [['UserPassword'], 'string', 'max' => 255],
            [['PhoneNumber'], 'string', 'max' => 15],
            [['Province', 'District', 'City'], 'string', 'max' => 20],
            [['Address'], 'string', 'max' => 100],
            [['Email'], 'unique'],
            [['CNIC'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CNIC' => 'Cnic',
            'Email' => 'Email',
            'UserPassword' => 'User Password',
            'PhoneNumber' => 'Phone Number',
            'Province' => 'Province',
            'District' => 'District',
            'City' => 'City',
            'Address' => 'Address',
            'CreatedAt' => 'Created At',
            'UpdatedAt' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Complaints]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComplaints()
    {
        return $this->hasMany(Complaints::class, ['CreatedBy' => 'CNIC']);
    }

    /**
     * Gets query for [[Complaints0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComplaints0()
    {
        return $this->hasMany(Complaints::class, ['UpdatedBy' => 'CNIC']);
    }

    /**
     * Gets query for [[Discountrequests]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiscountrequests()
    {
        return $this->hasMany(Discountrequest::class, ['CreatedBy' => 'CNIC']);
    }

    /**
     * Gets query for [[Discountrequests0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiscountrequests0()
    {
        return $this->hasMany(Discountrequest::class, ['UpdatedBy' => 'CNIC']);
    }

    /**
     * Gets query for [[Documents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDocuments()
    {
        return $this->hasMany(Documents::class, ['UploadedBy' => 'CNIC']);
    }

    /**
     * Gets query for [[Notices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotices()
    {
        return $this->hasMany(Notice::class, ['CreatedBy' => 'CNIC']);
    }

    /**
     * Gets query for [[Notices0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotices0()
    {
        return $this->hasMany(Notice::class, ['UpdatedBy' => 'CNIC']);
    }

    /**
     * Gets query for [[Notices1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotices1()
    {
        return $this->hasMany(Notice::class, ['NoticeID' => 'NoticeID'])->viaTable('usernotice', ['CNIC' => 'CNIC']);
    }

    /**
     * Gets query for [[Projectmembers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectmembers()
    {
        return $this->hasMany(Projectmembers::class, ['UserID' => 'CNIC']);
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::class, ['CreatedBy' => 'CNIC']);
    }

    /**
     * Gets query for [[Projects0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects0()
    {
        return $this->hasMany(Project::class, ['UpdatedBy' => 'CNIC']);
    }

    /**
     * Gets query for [[Projects1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects1()
    {
        return $this->hasMany(Project::class, ['ProjectID' => 'ProjectID'])->viaTable('projectmembers', ['UserID' => 'CNIC']);
    }

    /**
     * Gets query for [[Units]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnits()
    {
        return $this->hasMany(Unit::class, ['OccupiedBy' => 'CNIC']);
    }

    /**
     * Gets query for [[Usernotices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsernotices()
    {
        return $this->hasMany(Usernotice::class, ['CNIC' => 'CNIC']);
    }

    /**
     * Gets query for [[Utilitybills]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtilitybills()
    {
        return $this->hasMany(Utilitybills::class, ['CreatedBy' => 'CNIC']);
    }

    /**
     * Gets query for [[Utilitybills0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtilitybills0()
    {
        return $this->hasMany(Utilitybills::class, ['UpdatedBy' => 'CNIC']);
    }

}
