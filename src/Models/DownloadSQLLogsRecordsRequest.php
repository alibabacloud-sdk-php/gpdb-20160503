<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DownloadSQLLogsRecordsRequest extends Model
{
    /**
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example testdb
     *
     * @var string
     */
    public $database;

    /**
     * @example 2023-05-08T06:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $executeCost;

    /**
     * @example success
     *
     * @var string
     */
    public $executeState;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 999
     *
     * @var string
     */
    public $maxExecuteCost;

    /**
     * @example 1
     *
     * @var string
     */
    public $minExecuteCost;

    /**
     * @example DQL
     *
     * @var string
     */
    public $operationClass;

    /**
     * @example SELECT
     *
     * @var string
     */
    public $operationType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example select 1
     *
     * @var string
     */
    public $queryKeywords;

    /**
     * @example 100.XX.XX.90
     *
     * @var string
     */
    public $sourceIP;

    /**
     * @example 2023-05-07T06:59Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'DBInstanceId'   => 'DBInstanceId',
        'database'       => 'Database',
        'endTime'        => 'EndTime',
        'executeCost'    => 'ExecuteCost',
        'executeState'   => 'ExecuteState',
        'lang'           => 'Lang',
        'maxExecuteCost' => 'MaxExecuteCost',
        'minExecuteCost' => 'MinExecuteCost',
        'operationClass' => 'OperationClass',
        'operationType'  => 'OperationType',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'queryKeywords'  => 'QueryKeywords',
        'sourceIP'       => 'SourceIP',
        'startTime'      => 'StartTime',
        'user'           => 'User',
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
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executeCost) {
            $res['ExecuteCost'] = $this->executeCost;
        }
        if (null !== $this->executeState) {
            $res['ExecuteState'] = $this->executeState;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->maxExecuteCost) {
            $res['MaxExecuteCost'] = $this->maxExecuteCost;
        }
        if (null !== $this->minExecuteCost) {
            $res['MinExecuteCost'] = $this->minExecuteCost;
        }
        if (null !== $this->operationClass) {
            $res['OperationClass'] = $this->operationClass;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryKeywords) {
            $res['QueryKeywords'] = $this->queryKeywords;
        }
        if (null !== $this->sourceIP) {
            $res['SourceIP'] = $this->sourceIP;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadSQLLogsRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecuteCost'])) {
            $model->executeCost = $map['ExecuteCost'];
        }
        if (isset($map['ExecuteState'])) {
            $model->executeState = $map['ExecuteState'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MaxExecuteCost'])) {
            $model->maxExecuteCost = $map['MaxExecuteCost'];
        }
        if (isset($map['MinExecuteCost'])) {
            $model->minExecuteCost = $map['MinExecuteCost'];
        }
        if (isset($map['OperationClass'])) {
            $model->operationClass = $map['OperationClass'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryKeywords'])) {
            $model->queryKeywords = $map['QueryKeywords'];
        }
        if (isset($map['SourceIP'])) {
            $model->sourceIP = $map['SourceIP'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}