<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlowSQLLogsRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $queryKeywords;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $sourceIP;

    /**
     * @var string
     */
    public $executeState;

    /**
     * @var string
     */
    public $operationClass;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $minExecuteCost;

    /**
     * @var string
     */
    public $maxExecuteCost;
    protected $_name = [
        'DBInstanceId'   => 'DBInstanceId',
        'queryKeywords'  => 'QueryKeywords',
        'startTime'      => 'StartTime',
        'database'       => 'Database',
        'user'           => 'User',
        'endTime'        => 'EndTime',
        'pageSize'       => 'PageSize',
        'pageNumber'     => 'PageNumber',
        'sourceIP'       => 'SourceIP',
        'executeState'   => 'ExecuteState',
        'operationClass' => 'OperationClass',
        'operationType'  => 'OperationType',
        'minExecuteCost' => 'MinExecuteCost',
        'maxExecuteCost' => 'MaxExecuteCost',
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
        if (null !== $this->queryKeywords) {
            $res['QueryKeywords'] = $this->queryKeywords;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->sourceIP) {
            $res['SourceIP'] = $this->sourceIP;
        }
        if (null !== $this->executeState) {
            $res['ExecuteState'] = $this->executeState;
        }
        if (null !== $this->operationClass) {
            $res['OperationClass'] = $this->operationClass;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->minExecuteCost) {
            $res['MinExecuteCost'] = $this->minExecuteCost;
        }
        if (null !== $this->maxExecuteCost) {
            $res['MaxExecuteCost'] = $this->maxExecuteCost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlowSQLLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['QueryKeywords'])) {
            $model->queryKeywords = $map['QueryKeywords'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['SourceIP'])) {
            $model->sourceIP = $map['SourceIP'];
        }
        if (isset($map['ExecuteState'])) {
            $model->executeState = $map['ExecuteState'];
        }
        if (isset($map['OperationClass'])) {
            $model->operationClass = $map['OperationClass'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['MinExecuteCost'])) {
            $model->minExecuteCost = $map['MinExecuteCost'];
        }
        if (isset($map['MaxExecuteCost'])) {
            $model->maxExecuteCost = $map['MaxExecuteCost'];
        }

        return $model;
    }
}
