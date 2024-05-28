<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateDBResourceGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example {"CpuRateLimit":"10","MemoryLimit":"12","MemorySharedQuota":"20","MemorySpillRatio":"75","Concurrency":"3"}
     *
     * @var string
     */
    public $resourceGroupConfig;

    /**
     * @description This parameter is required.
     *
     * @example testgroup
     *
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'DBInstanceId'        => 'DBInstanceId',
        'ownerId'             => 'OwnerId',
        'resourceGroupConfig' => 'ResourceGroupConfig',
        'resourceGroupName'   => 'ResourceGroupName',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupConfig) {
            $res['ResourceGroupConfig'] = $this->resourceGroupConfig;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceGroupConfig'])) {
            $model->resourceGroupConfig = $map['ResourceGroupConfig'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
