<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeSampleDataResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The error message returned if an error occurs. This message does not affect the execution of the operation.
     *
     * @example ******
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Indicates whether a sample dataset is loaded to the instance. Valid values:
     *
     *   **true**: A sample dataset is loaded.
     *   **false**: No sample dataset is loaded.
     *
     * @example true
     *
     * @var bool
     */
    public $hasSampleData;

    /**
     * @description The ID of the request.
     *
     * @example 84CD7CAF-FA7B-5178-B19F-D8CDE307D5FA_8111
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId'  => 'DBInstanceId',
        'errorMessage'  => 'ErrorMessage',
        'hasSampleData' => 'HasSampleData',
        'requestId'     => 'RequestId',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->hasSampleData) {
            $res['HasSampleData'] = $this->hasSampleData;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSampleDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['HasSampleData'])) {
            $model->hasSampleData = $map['HasSampleData'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
