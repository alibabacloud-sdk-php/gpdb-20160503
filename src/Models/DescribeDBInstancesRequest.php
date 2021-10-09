<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDBInstancesRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $DBInstanceIds;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string[]
     */
    public $instanceDeployTypes;

    /**
     * @var string[]
     */
    public $DBInstanceStatuses;

    /**
     * @var string[]
     */
    public $DBInstanceCategories;
    protected $_name = [
        'ownerId'               => 'OwnerId',
        'regionId'              => 'RegionId',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'DBInstanceIds'         => 'DBInstanceIds',
        'pageSize'              => 'PageSize',
        'pageNumber'            => 'PageNumber',
        'tag'                   => 'Tag',
        'instanceDeployTypes'   => 'InstanceDeployTypes',
        'DBInstanceStatuses'    => 'DBInstanceStatuses',
        'DBInstanceCategories'  => 'DBInstanceCategories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->DBInstanceIds) {
            $res['DBInstanceIds'] = $this->DBInstanceIds;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceDeployTypes) {
            $res['InstanceDeployTypes'] = $this->instanceDeployTypes;
        }
        if (null !== $this->DBInstanceStatuses) {
            $res['DBInstanceStatuses'] = $this->DBInstanceStatuses;
        }
        if (null !== $this->DBInstanceCategories) {
            $res['DBInstanceCategories'] = $this->DBInstanceCategories;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['DBInstanceIds'])) {
            $model->DBInstanceIds = $map['DBInstanceIds'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceDeployTypes'])) {
            if (!empty($map['InstanceDeployTypes'])) {
                $model->instanceDeployTypes = $map['InstanceDeployTypes'];
            }
        }
        if (isset($map['DBInstanceStatuses'])) {
            if (!empty($map['DBInstanceStatuses'])) {
                $model->DBInstanceStatuses = $map['DBInstanceStatuses'];
            }
        }
        if (isset($map['DBInstanceCategories'])) {
            if (!empty($map['DBInstanceCategories'])) {
                $model->DBInstanceCategories = $map['DBInstanceCategories'];
            }
        }

        return $model;
    }
}
