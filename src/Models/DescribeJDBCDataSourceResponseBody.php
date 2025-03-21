<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeJDBCDataSourceResponseBody extends Model
{
    /**
     * @description The time when the service was created.
     *
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the service. The description can be up to 256 characters in length.
     *
     * @example mysql data source config
     *
     * @var string
     */
    public $dataSourceDescription;

    /**
     * @description The data source ID.
     *
     * @example 123
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description The name of data soruce
     *
     * @example hdfs_pxf
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The status of the service. Valid values:
     *
     *   Init
     *   Running
     *   Exception
     *
     * @example Running
     *
     * @var string
     */
    public $dataSourceStatus;

    /**
     * @description The type of the data source.
     *
     * @example MySQL
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The id of the external data service
     *
     * @example 2989
     *
     * @var string
     */
    public $externalDataServiceId;

    /**
     * @description The JDBC connection string.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $JDBCConnectionString;

    /**
     * @description The password of the database account.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $JDBCPassword;

    /**
     * @description The name of the database account.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $JDBCUserName;

    /**
     * @description The time when the data source was last modified.
     *
     * @example 2024-08-27T02:01:10Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The request ID.
     *
     * @example B4CAF581-2AC7-41AD-8940-D56DF7AADF5B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The message of the status
     *
     * @example ""
     *
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dataSourceDescription' => 'DataSourceDescription',
        'dataSourceId' => 'DataSourceId',
        'dataSourceName' => 'DataSourceName',
        'dataSourceStatus' => 'DataSourceStatus',
        'dataSourceType' => 'DataSourceType',
        'externalDataServiceId' => 'ExternalDataServiceId',
        'JDBCConnectionString' => 'JDBCConnectionString',
        'JDBCPassword' => 'JDBCPassword',
        'JDBCUserName' => 'JDBCUserName',
        'modifyTime' => 'ModifyTime',
        'requestId' => 'RequestId',
        'statusMessage' => 'StatusMessage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataSourceDescription) {
            $res['DataSourceDescription'] = $this->dataSourceDescription;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->dataSourceStatus) {
            $res['DataSourceStatus'] = $this->dataSourceStatus;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->externalDataServiceId) {
            $res['ExternalDataServiceId'] = $this->externalDataServiceId;
        }
        if (null !== $this->JDBCConnectionString) {
            $res['JDBCConnectionString'] = $this->JDBCConnectionString;
        }
        if (null !== $this->JDBCPassword) {
            $res['JDBCPassword'] = $this->JDBCPassword;
        }
        if (null !== $this->JDBCUserName) {
            $res['JDBCUserName'] = $this->JDBCUserName;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJDBCDataSourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataSourceDescription'])) {
            $model->dataSourceDescription = $map['DataSourceDescription'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['DataSourceStatus'])) {
            $model->dataSourceStatus = $map['DataSourceStatus'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['ExternalDataServiceId'])) {
            $model->externalDataServiceId = $map['ExternalDataServiceId'];
        }
        if (isset($map['JDBCConnectionString'])) {
            $model->JDBCConnectionString = $map['JDBCConnectionString'];
        }
        if (isset($map['JDBCPassword'])) {
            $model->JDBCPassword = $map['JDBCPassword'];
        }
        if (isset($map['JDBCUserName'])) {
            $model->JDBCUserName = $map['JDBCUserName'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        return $model;
    }
}
