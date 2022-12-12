<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceNetworkTypeRequest extends Model
{
    /**
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @example 10.10.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description VPC ID。
     *
     * @example vpc-bp19ame5m1r3oejns****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @example vsw-bp1cpq8mr64paltkb****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'DBInstanceId'        => 'DBInstanceId',
        'instanceNetworkType' => 'InstanceNetworkType',
        'privateIpAddress'    => 'PrivateIpAddress',
        'VPCId'               => 'VPCId',
        'vSwitchId'           => 'VSwitchId',
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
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceNetworkTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
