<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @var bool
     */
    public $enableRecoveryPoint;

    /**
     * @var string
     */
    public $recoveryPointPeriod;
    protected $_name = [
        'DBInstanceId'          => 'DBInstanceId',
        'preferredBackupTime'   => 'PreferredBackupTime',
        'preferredBackupPeriod' => 'PreferredBackupPeriod',
        'backupRetentionPeriod' => 'BackupRetentionPeriod',
        'enableRecoveryPoint'   => 'EnableRecoveryPoint',
        'recoveryPointPeriod'   => 'RecoveryPointPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->enableRecoveryPoint) {
            $res['EnableRecoveryPoint'] = $this->enableRecoveryPoint;
        }
        if (null !== $this->recoveryPointPeriod) {
            $res['RecoveryPointPeriod'] = $this->recoveryPointPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['EnableRecoveryPoint'])) {
            $model->enableRecoveryPoint = $map['EnableRecoveryPoint'];
        }
        if (isset($map['RecoveryPointPeriod'])) {
            $model->recoveryPointPeriod = $map['RecoveryPointPeriod'];
        }

        return $model;
    }
}
