<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeSpecificationRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $cpuCores;

    /**
     * @example gp-bp***************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example SSD
     *
     * @var string
     */
    public $storageType;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalNodeNum;
    protected $_name = [
        'cpuCores'     => 'CpuCores',
        'DBInstanceId' => 'DBInstanceId',
        'ownerId'      => 'OwnerId',
        'storageType'  => 'StorageType',
        'totalNodeNum' => 'TotalNodeNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->totalNodeNum) {
            $res['TotalNodeNum'] = $this->totalNodeNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSpecificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['TotalNodeNum'])) {
            $model->totalNodeNum = $map['TotalNodeNum'];
        }

        return $model;
    }
}
