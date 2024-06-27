<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class UpdateCollectionDataMetadataResponseBody extends Model
{
    /**
     * @description The number of effective rows.
     *
     * @example 10
     *
     * @var int
     */
    public $appliedRows;

    /**
     * @description The error message returned.
     *
     * @example failed to connect database, detailMsg: getConnection fail::SQL State: 28P01, Error Code: 0, Error Message: FATAL: password
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example ABB39CC3-4488-4857-905D-2E4A051D0521
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **success**
     *   **fail**
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'appliedRows' => 'AppliedRows',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appliedRows) {
            $res['AppliedRows'] = $this->appliedRows;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCollectionDataMetadataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppliedRows'])) {
            $model->appliedRows = $map['AppliedRows'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
