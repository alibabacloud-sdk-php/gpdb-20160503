<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponse\resources;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponse\resources\supportedEngines\supportedInstanceClasses;
use AlibabaCloud\Tea\Model;

class supportedEngines extends Model
{
    /**
     * @var string
     */
    public $supportedEngineVersion;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var supportedInstanceClasses[]
     */
    public $supportedInstanceClasses;
    protected $_name = [
        'supportedEngineVersion'   => 'SupportedEngineVersion',
        'mode'                     => 'Mode',
        'supportedInstanceClasses' => 'SupportedInstanceClasses',
    ];

    public function validate()
    {
        Model::validateRequired('supportedEngineVersion', $this->supportedEngineVersion, true);
        Model::validateRequired('mode', $this->mode, true);
        Model::validateRequired('supportedInstanceClasses', $this->supportedInstanceClasses, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedEngineVersion) {
            $res['SupportedEngineVersion'] = $this->supportedEngineVersion;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->supportedInstanceClasses) {
            $res['SupportedInstanceClasses'] = [];
            if (null !== $this->supportedInstanceClasses && \is_array($this->supportedInstanceClasses)) {
                $n = 0;
                foreach ($this->supportedInstanceClasses as $item) {
                    $res['SupportedInstanceClasses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEngines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedEngineVersion'])) {
            $model->supportedEngineVersion = $map['SupportedEngineVersion'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['SupportedInstanceClasses'])) {
            if (!empty($map['SupportedInstanceClasses'])) {
                $model->supportedInstanceClasses = [];
                $n                               = 0;
                foreach ($map['SupportedInstanceClasses'] as $item) {
                    $model->supportedInstanceClasses[$n++] = null !== $item ? supportedInstanceClasses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
