<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status;

use AlibabaCloud\Tea\Model;

class adbpgMasterDiskUsagePercentMax extends Model
{
    /**
     * @description The status corresponding to the maximum storage usage of the coordinator node. Valid values:
     *
     *   **critical**: The coordinator node storage usage is greater than or equal to 90%. In this case, the instance is locked.
     *   **warning**: The coordinator node storage usage is greater than or equal to 70% and less than 90%.
     *   **healthy**: The coordinator node storage usage is less than 70%.
     *
     * @example healthy
     *
     * @var string
     */
    public $status;

    /**
     * @description The metric value of maximum coordinator node storage usage.
     *
     * Unit: %.
     * @example 1.34
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'status' => 'Status',
        'value'  => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adbpgMasterDiskUsagePercentMax
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
