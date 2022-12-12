<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSpecificationResponseBody;

use AlibabaCloud\Tea\Model;

class storageNotice extends Model
{
    /**
     * @example 2 CPU Cores/16GB Memory/160GB SSD Storage
     *
     * @var string
     */
    public $text;

    /**
     * @example 2 CPU Cores/16GB Memory/160GB SSD Storage
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'text'  => 'Text',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageNotice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
