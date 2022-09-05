<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class SetDBInstancePlanStatusRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $planStatus;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'ownerId'      => 'OwnerId',
        'planId'       => 'PlanId',
        'planStatus'   => 'PlanStatus',
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
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planStatus) {
            $res['PlanStatus'] = $this->planStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDBInstancePlanStatusRequest
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
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PlanStatus'])) {
            $model->planStatus = $map['PlanStatus'];
        }

        return $model;
    }
}