<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyStreamingJobShrinkRequest extends Model
{
    /**
     * @description The name of the database account.
     *
     * @example test-account
     *
     * @var string
     */
    public $account;

    /**
     * @description The delivery guarantee setting.
     *
     * Valid values:
     *
     *   ATLEAST
     *   EXACTLY
     *
     * @example ATLEAST / EXACTLY
     *
     * @var string
     */
    public $consistency;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example ModifyStreamingJob
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The destination fields.
     *
     * @var string
     */
    public $destColumnsShrink;

    /**
     * @description The name of the destination database.
     *
     * @example dest-db
     *
     * @var string
     */
    public $destDatabase;

    /**
     * @example dest-schema
     *
     * @var string
     */
    public $destSchema;

    /**
     * @description The name of the destination table.
     *
     * @example dest-table
     *
     * @var string
     */
    public $destTable;

    /**
     * @example 5
     *
     * @var int
     */
    public $errorLimitCount;

    /**
     * @example earliest /  latest
     *
     * @var string
     */
    public $fallbackOffset;

    /**
     * @example group_name
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The YAML configuration file of the job. This parameter must be specified when Mode is set to professional.
     *
     * @example DATABASE: adbpgss_test
     * group.id: testgroup
     * @var string
     */
    public $jobConfig;

    /**
     * @description The description of the job.
     *
     * @example test-job
     *
     * @var string
     */
    public $jobDescription;

    /**
     * @description The job ID.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $matchColumnsShrink;

    /**
     * @description The password of the database account.
     *
     * @example pwd123
     *
     * @var string
     */
    public $password;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The source fields.
     *
     * @var string
     */
    public $srcColumnsShrink;

    /**
     * @description Specifies whether to test the real-time job. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $tryRun;

    /**
     * @var string
     */
    public $updateColumnsShrink;

    /**
     * @description The write mode.
     *
     * Valid values:
     *
     *   insert
     *   update
     *   merge
     *
     * @example INSERT/UPDATE/MERGE
     *
     * @var string
     */
    public $writeMode;
    protected $_name = [
        'account'             => 'Account',
        'consistency'         => 'Consistency',
        'DBInstanceId'        => 'DBInstanceId',
        'destColumnsShrink'   => 'DestColumns',
        'destDatabase'        => 'DestDatabase',
        'destSchema'          => 'DestSchema',
        'destTable'           => 'DestTable',
        'errorLimitCount'     => 'ErrorLimitCount',
        'fallbackOffset'      => 'FallbackOffset',
        'groupName'           => 'GroupName',
        'jobConfig'           => 'JobConfig',
        'jobDescription'      => 'JobDescription',
        'jobId'               => 'JobId',
        'matchColumnsShrink'  => 'MatchColumns',
        'password'            => 'Password',
        'regionId'            => 'RegionId',
        'srcColumnsShrink'    => 'SrcColumns',
        'tryRun'              => 'TryRun',
        'updateColumnsShrink' => 'UpdateColumns',
        'writeMode'           => 'WriteMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->consistency) {
            $res['Consistency'] = $this->consistency;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->destColumnsShrink) {
            $res['DestColumns'] = $this->destColumnsShrink;
        }
        if (null !== $this->destDatabase) {
            $res['DestDatabase'] = $this->destDatabase;
        }
        if (null !== $this->destSchema) {
            $res['DestSchema'] = $this->destSchema;
        }
        if (null !== $this->destTable) {
            $res['DestTable'] = $this->destTable;
        }
        if (null !== $this->errorLimitCount) {
            $res['ErrorLimitCount'] = $this->errorLimitCount;
        }
        if (null !== $this->fallbackOffset) {
            $res['FallbackOffset'] = $this->fallbackOffset;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->jobConfig) {
            $res['JobConfig'] = $this->jobConfig;
        }
        if (null !== $this->jobDescription) {
            $res['JobDescription'] = $this->jobDescription;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->matchColumnsShrink) {
            $res['MatchColumns'] = $this->matchColumnsShrink;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->srcColumnsShrink) {
            $res['SrcColumns'] = $this->srcColumnsShrink;
        }
        if (null !== $this->tryRun) {
            $res['TryRun'] = $this->tryRun;
        }
        if (null !== $this->updateColumnsShrink) {
            $res['UpdateColumns'] = $this->updateColumnsShrink;
        }
        if (null !== $this->writeMode) {
            $res['WriteMode'] = $this->writeMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyStreamingJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['Consistency'])) {
            $model->consistency = $map['Consistency'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DestColumns'])) {
            $model->destColumnsShrink = $map['DestColumns'];
        }
        if (isset($map['DestDatabase'])) {
            $model->destDatabase = $map['DestDatabase'];
        }
        if (isset($map['DestSchema'])) {
            $model->destSchema = $map['DestSchema'];
        }
        if (isset($map['DestTable'])) {
            $model->destTable = $map['DestTable'];
        }
        if (isset($map['ErrorLimitCount'])) {
            $model->errorLimitCount = $map['ErrorLimitCount'];
        }
        if (isset($map['FallbackOffset'])) {
            $model->fallbackOffset = $map['FallbackOffset'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['JobConfig'])) {
            $model->jobConfig = $map['JobConfig'];
        }
        if (isset($map['JobDescription'])) {
            $model->jobDescription = $map['JobDescription'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MatchColumns'])) {
            $model->matchColumnsShrink = $map['MatchColumns'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SrcColumns'])) {
            $model->srcColumnsShrink = $map['SrcColumns'];
        }
        if (isset($map['TryRun'])) {
            $model->tryRun = $map['TryRun'];
        }
        if (isset($map['UpdateColumns'])) {
            $model->updateColumnsShrink = $map['UpdateColumns'];
        }
        if (isset($map['WriteMode'])) {
            $model->writeMode = $map['WriteMode'];
        }

        return $model;
    }
}
