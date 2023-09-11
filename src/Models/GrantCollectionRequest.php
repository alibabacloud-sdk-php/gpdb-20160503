<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class GrantCollectionRequest extends Model
{
    /**
     * @description The name of the collection.
     *
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @description The ID of the instance in reserved storage mode.
     *
     * > You can call the [DescribeDBInstances](~~86911~~) operation to query the information about all AnalyticDB for PostgreSQL instances within a region, including instance IDs.
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the namespace to which you want to grant the vector collection permissions.
     *
     * @example othernamespace
     *
     * @var string
     */
    public $grantToNamespace;

    /**
     * @description The type of the permissions that you want to grant. Valid values:
     *
     *   rw: the read and write permissions.
     *   ro: the read-only permission.
     *   none: the delete permission.
     *
     * @example rw
     *
     * @var string
     */
    public $grantType;

    /**
     * @description The name of the manager account that has the rds_superuser permission.
     *
     * @example testaccount
     *
     * @var string
     */
    public $managerAccount;

    /**
     * @description The password of the manager account.
     *
     * @example testpassword
     *
     * @var string
     */
    public $managerAccountPassword;

    /**
     * @description The name of the namespace.
     *
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance.
     *
     * > You can call the [DescribeRegions](~~86912~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'collection'             => 'Collection',
        'DBInstanceId'           => 'DBInstanceId',
        'grantToNamespace'       => 'GrantToNamespace',
        'grantType'              => 'GrantType',
        'managerAccount'         => 'ManagerAccount',
        'managerAccountPassword' => 'ManagerAccountPassword',
        'namespace'              => 'Namespace',
        'ownerId'                => 'OwnerId',
        'regionId'               => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->grantToNamespace) {
            $res['GrantToNamespace'] = $this->grantToNamespace;
        }
        if (null !== $this->grantType) {
            $res['GrantType'] = $this->grantType;
        }
        if (null !== $this->managerAccount) {
            $res['ManagerAccount'] = $this->managerAccount;
        }
        if (null !== $this->managerAccountPassword) {
            $res['ManagerAccountPassword'] = $this->managerAccountPassword;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantCollectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['GrantToNamespace'])) {
            $model->grantToNamespace = $map['GrantToNamespace'];
        }
        if (isset($map['GrantType'])) {
            $model->grantType = $map['GrantType'];
        }
        if (isset($map['ManagerAccount'])) {
            $model->managerAccount = $map['ManagerAccount'];
        }
        if (isset($map['ManagerAccountPassword'])) {
            $model->managerAccountPassword = $map['ManagerAccountPassword'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
