<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDiagnosisMonitorPerformanceResponseBody\performances;
use AlibabaCloud\Tea\Model;

class DescribeDiagnosisMonitorPerformanceResponseBody extends Model
{
    /**
     * @var performances[]
     */
    public $performances;

    /**
     * @var int
     */
    public $performancesThreshold;

    /**
     * @var bool
     */
    public $performancesTruncated;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'performances'          => 'Performances',
        'performancesThreshold' => 'PerformancesThreshold',
        'performancesTruncated' => 'PerformancesTruncated',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->performances) {
            $res['Performances'] = [];
            if (null !== $this->performances && \is_array($this->performances)) {
                $n = 0;
                foreach ($this->performances as $item) {
                    $res['Performances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->performancesThreshold) {
            $res['PerformancesThreshold'] = $this->performancesThreshold;
        }
        if (null !== $this->performancesTruncated) {
            $res['PerformancesTruncated'] = $this->performancesTruncated;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisMonitorPerformanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Performances'])) {
            if (!empty($map['Performances'])) {
                $model->performances = [];
                $n                   = 0;
                foreach ($map['Performances'] as $item) {
                    $model->performances[$n++] = null !== $item ? performances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PerformancesThreshold'])) {
            $model->performancesThreshold = $map['PerformancesThreshold'];
        }
        if (isset($map['PerformancesTruncated'])) {
            $model->performancesTruncated = $map['PerformancesTruncated'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
