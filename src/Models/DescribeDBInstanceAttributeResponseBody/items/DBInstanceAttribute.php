<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponseBody\items;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\tags;
use AlibabaCloud\Tea\Model;

class DBInstanceAttribute extends Model
{
    /**
     * @description Queries the current instance availability status, in percentage (%).
     *
     * > This parameter is only applicable to instances in the storage reserved mode.
     *
     * @example 100.0%
     *
     * @var string
     */
    public $availabilityValue;

    /**
     * @var string
     */
    public $cacheStorageSize;

    /**
     * @description Access mode, with the following values:
     *
     * - **Performance**: Standard access mode.
     * - **Safty**: High-security access mode.
     * - **LVS**: LVS link mode.
     *
     * @example LVS
     *
     * @var string
     */
    public $connectionMode;

    /**
     * @description Instance connection address.
     *
     * @example gp-bp13ue79qk8y1****-master.gpdb.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description Minor version number of the kernel.
     *
     * @example mm.v6.3.10.1-202207141918
     *
     * @var string
     */
    public $coreVersion;

    /**
     * @description Number of CPU cores for the compute node, unit: Core.
     *
     * @example 2
     *
     * @var int
     */
    public $cpuCores;

    /**
     * @description Number of CPU cores per node.
     *
     * > This parameter is only applicable to instances in the storage reserved mode.
     *
     * @example 0
     *
     * @var int
     */
    public $cpuCoresPerNode;

    /**
     * @description Instance creation time.
     *
     * @example 2022-08-11T09:16:26Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Instance series, with the following values:
     *
     * - **Basic**: Basic Edition.
     * - **HighAvailability**: High Availability Edition.
     *
     * @example HighAvailability
     *
     * @var string
     */
    public $DBInstanceCategory;

    /**
     * @description Instance specification.
     *
     * > This parameter is only applicable to reserved storage mode instances.
     *
     * @example gpdb.group.segsdx1
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description Instance family, with the following values:
     *
     * - **s**: Shared type.
     * - **x**: General type.
     * - **d**: Dedicated package.
     * - **h**: Dedicated physical machine.
     *
     * @example x
     *
     * @var string
     */
    public $DBInstanceClassType;

    /**
     * @description Number of CPU cores.
     *
     * @example 2
     *
     * @var int
     */
    public $DBInstanceCpuCores;

    /**
     * @description Instance description.
     *
     * @example gp-bp13ue79qk8y1****
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description Maximum BPS (disk throughput) of the compute group, in Mbps.
     *
     * > This parameter is only applicable to reserved storage mode instances.
     *
     * @example 0
     *
     * @var int
     */
    public $DBInstanceDiskMBPS;

    /**
     * @description Number of compute groups.
     *
     * > This parameter is only applicable to reserved storage mode instances.
     *
     * @example 0
     *
     * @var string
     */
    public $DBInstanceGroupCount;

    /**
     * @description Instance ID.
     *
     * @example gp-bp13ue79qk8y1****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Memory of the compute node.
     *
     * > The unit for storage-reserved mode is MB; for Serverless and storage-elastic modes, it is GB.
     *
     * @example 16
     *
     * @var int
     */
    public $DBInstanceMemory;

    /**
     * @description Instance resource type, with the following values:
     *
     * - **Serverless**: Serverless mode.
     * - **StorageElastic**: Storage elastic mode.
     * - **Classic**: Storage reserved mode.
     *
     * @example StorageElastic
     *
     * @var string
     */
    public $DBInstanceMode;

    /**
     * @description This parameter is deprecated and will not return any value.
     *
     * @example null
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description Instance status. For more details, see the supplementary explanation of the DBInstanceStatus parameter.
     *
     * @example Running
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description Maximum storage space of a single replica, in GB.
     *
     * @example 50
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The deployment mode.
     *
     * @example single
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description Encryption key.
     *
     * > This parameter is returned only for instances with disk encryption enabled.
     *
     * @example 0d2470df-da7b-4786-b981-************
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description Encryption type, with the following value:
     *
     * - **CloudDisk**: Cloud disk encryption.
     *
     * > This parameter is returned only for instances with cloud disk encryption.
     *
     * @example CloudDisk
     *
     * @var string
     */
    public $encryptionType;

    /**
     * @description Database engine.
     *
     * @example gpdb
     *
     * @var string
     */
    public $engine;

    /**
     * @description Database version.
     *
     * @example 6.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description Instance expiration time (in UTC).
     *
     * > The expiration time for pay-as-you-go instances is `2999-09-08T16:00:00Z`.
     *
     * @example 2999-09-08T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Compute group machine type, with the following values:
     * - **0**: SSD
     * - **1**: HDD
     *
     * > This parameter applies only to storage-reserved mode instances.
     *
     * @example 0
     *
     * @var string
     */
    public $hostType;

    /**
     * @description Idle release waiting time. Unit: seconds.
     *
     * > This parameter is returned only for instances in the Serverless automatic scheduling mode.
     *
     * @example 600
     *
     * @var int
     */
    public $idleTime;

    /**
     * @description Instance network type, with the following values:
     *
     * - **Classic**: Classic network.
     * - **VPC**: VPC network.
     *
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @description Lock mode, with the following values:
     *
     * - **Unlock**: Normal.
     * - **ManualLock**: Manually triggered lock.
     * - **LockByExpiration**: Automatically locked when the instance expires.
     * - **LockByRestoration**: Automatically locked before the instance rolls back.
     * - **LockByDiskQuota**: Automatically locked when the instance space is full.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description This parameter is deprecated and will not return any value.
     *
     * @example null
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description Maintenance end time.
     *
     * @example 22:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @description Maintenance start time.
     *
     * @example 18:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @description The specifications of AI coordinator node resources of the instance. If the coordinator nodes of the instance are not AI nodes, null is returned.
     *
     * @example ADB.AIMedium.2
     *
     * @var string
     */
    public $masterAISpec;

    /**
     * @description Master resources.
     *
     * @example 4
     *
     * @var int
     */
    public $masterCU;

    /**
     * @description Number of Master nodes.
     *
     * @example 1
     *
     * @var int
     */
    public $masterNodeNum;

    /**
     * @description Maximum number of concurrent connections for the instance.
     *
     * > This parameter is only applicable to reserved storage mode instances.
     *
     * @example 500
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description Memory size per replica, see the **MemoryUnit** parameter for the unit.
     *
     * > This parameter is only applicable to instances in the storage reserved mode.
     *
     * @example 0
     *
     * @var int
     */
    public $memoryPerNode;

    /**
     * @description Memory size of the compute node.
     *
     * > The unit is MB for the storage reserved mode; GB for Serverless and storage elastic modes.
     *
     * @example 16
     *
     * @var int
     */
    public $memorySize;

    /**
     * @description Memory unit.
     *
     * > This parameter is only applicable to reserved storage mode instances.
     *
     * @example GB
     *
     * @var string
     */
    public $memoryUnit;

    /**
     * @description Minor version of the kernel.
     *
     * @example 6.3.10.1-202207141918
     *
     * @var string
     */
    public $minorVersion;

    /**
     * @description Billing type, with the following values:
     *
     * - **Postpaid**: Pay-as-you-go.
     * - **Prepaid**: Subscription.
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description Instance port number.
     *
     * @example 5432
     *
     * @var string
     */
    public $port;

    /**
     * @description The service type.
     *
     * @example standard
     *
     * @var string
     */
    public $prodType;

    /**
     * @description This parameter has been deprecated and will not return a value.
     *
     * @example null
     *
     * @var string
     */
    public $readDelayTime;

    /**
     * @description Region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description ID of the resource group where the instance is located.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Instance running time.
     *
     * @example 4 days 22:58:55
     *
     * @var string
     */
    public $runningTime;

    /**
     * @description This parameter is deprecated and will not return any value.
     *
     * @example null
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description Performance Level (PL), currently only **PL1** is supported.
     *
     * @example PL1
     *
     * @var string
     */
    public $segDiskPerformanceLevel;

    /**
     * @description Number of Segment nodes.
     *
     * > This parameter applies only to instances in the storage elastic mode and Serverless manual scheduling mode.
     *
     * @example 4
     *
     * @var int
     */
    public $segNodeNum;

    /**
     * @description The specifications of AI compute node resources of the instance. If the compute nodes of the instance are not AI nodes, null is returned.
     *
     * @example ADB.AIMedium.2
     *
     * @var string
     */
    public $segmentAISpec;

    /**
     * @description Number of compute groups.
     *
     * > This parameter applies only to storage-reserved mode instances.
     *
     * @example 0
     *
     * @var int
     */
    public $segmentCounts;

    /**
     * @description The mode of the Serverless instance, with the following values:
     *
     * - **Manual**: Manual scheduling.
     * - **Auto**: Automatic scheduling.
     *
     * > This parameter is returned only for Serverless mode instances.
     *
     * @example Auto
     *
     * @var string
     */
    public $serverlessMode;

    /**
     * @description Compute resource threshold. Unit: ACU.
     *
     * > This parameter is returned only for instances in the Serverless automatic scheduling mode.
     *
     * @example 32
     *
     * @var int
     */
    public $serverlessResource;

    /**
     * @description The secondary zone ID.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $standbyZoneId;

    /**
     * @description The time when the instance started running.
     *
     * @example 2022-08-11T09:26:43Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Storage size per replica, see the **StorageUnit** parameter for units.
     *
     * > This parameter applies only to storage-reserved mode instances.
     *
     * @example 0
     *
     * @var int
     */
    public $storagePerNode;

    /**
     * @description Storage space size, unit: GB.
     *
     * @example 50
     *
     * @var int
     */
    public $storageSize;

    /**
     * @description Storage type, with the following values:
     *
     * - **cloud_essd**: ESSD cloud disk.
     * - **cloud_efficiency**: Efficient cloud disk.
     *
     * > This parameter is only applicable to instances in the storage elastic mode.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $storageType;

    /**
     * @description Storage unit, with the following values:
     *
     * - **GB SSD**
     * - **TB SSD**
     * - **GB HDD**
     *
     * > This parameter is only applicable to instances in the storage reserved mode.
     *
     * @example GB SSD
     *
     * @var string
     */
    public $storageUnit;

    /**
     * @description Indicates whether backup recovery is supported, with the following values:
     *
     * - **true**: Backup recovery is supported.
     * - **false**: Backup recovery is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $supportRestore;

    /**
     * @description Tag key-value pairs.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description vSwitch ID.
     *
     * @example vsw-bp1cpq8mr64paltkb****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description Indicates whether vector engine optimization is enabled. The values are as follows:
     * - **enabled**: Indicates that vector engine optimization is enabled.
     * - **disabled**: Indicates that vector engine optimization is disabled.
     *
     * @example enabled
     *
     * @var string
     */
    public $vectorConfigurationStatus;

    /**
     * @description VPC ID.
     *
     * @example vpc-bp19ame5m1r3oejns****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Zone ID.
     *
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availabilityValue' => 'AvailabilityValue',
        'cacheStorageSize' => 'CacheStorageSize',
        'connectionMode' => 'ConnectionMode',
        'connectionString' => 'ConnectionString',
        'coreVersion' => 'CoreVersion',
        'cpuCores' => 'CpuCores',
        'cpuCoresPerNode' => 'CpuCoresPerNode',
        'creationTime' => 'CreationTime',
        'DBInstanceCategory' => 'DBInstanceCategory',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceClassType' => 'DBInstanceClassType',
        'DBInstanceCpuCores' => 'DBInstanceCpuCores',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceDiskMBPS' => 'DBInstanceDiskMBPS',
        'DBInstanceGroupCount' => 'DBInstanceGroupCount',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceMemory' => 'DBInstanceMemory',
        'DBInstanceMode' => 'DBInstanceMode',
        'DBInstanceNetType' => 'DBInstanceNetType',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'deployMode' => 'DeployMode',
        'encryptionKey' => 'EncryptionKey',
        'encryptionType' => 'EncryptionType',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'expireTime' => 'ExpireTime',
        'hostType' => 'HostType',
        'idleTime' => 'IdleTime',
        'instanceNetworkType' => 'InstanceNetworkType',
        'instanceSpec' => 'InstanceSpec',
        'lockMode' => 'LockMode',
        'lockReason' => 'LockReason',
        'maintainEndTime' => 'MaintainEndTime',
        'maintainStartTime' => 'MaintainStartTime',
        'masterAISpec' => 'MasterAISpec',
        'masterCU' => 'MasterCU',
        'masterNodeNum' => 'MasterNodeNum',
        'maxConnections' => 'MaxConnections',
        'memoryPerNode' => 'MemoryPerNode',
        'memorySize' => 'MemorySize',
        'memoryUnit' => 'MemoryUnit',
        'minorVersion' => 'MinorVersion',
        'payType' => 'PayType',
        'port' => 'Port',
        'prodType' => 'ProdType',
        'readDelayTime' => 'ReadDelayTime',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'runningTime' => 'RunningTime',
        'securityIPList' => 'SecurityIPList',
        'segDiskPerformanceLevel' => 'SegDiskPerformanceLevel',
        'segNodeNum' => 'SegNodeNum',
        'segmentAISpec' => 'SegmentAISpec',
        'segmentCounts' => 'SegmentCounts',
        'serverlessMode' => 'ServerlessMode',
        'serverlessResource' => 'ServerlessResource',
        'standbyZoneId' => 'StandbyZoneId',
        'startTime' => 'StartTime',
        'storagePerNode' => 'StoragePerNode',
        'storageSize' => 'StorageSize',
        'storageType' => 'StorageType',
        'storageUnit' => 'StorageUnit',
        'supportRestore' => 'SupportRestore',
        'tags' => 'Tags',
        'vSwitchId' => 'VSwitchId',
        'vectorConfigurationStatus' => 'VectorConfigurationStatus',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->availabilityValue) {
            $res['AvailabilityValue'] = $this->availabilityValue;
        }
        if (null !== $this->cacheStorageSize) {
            $res['CacheStorageSize'] = $this->cacheStorageSize;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->coreVersion) {
            $res['CoreVersion'] = $this->coreVersion;
        }
        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }
        if (null !== $this->cpuCoresPerNode) {
            $res['CpuCoresPerNode'] = $this->cpuCoresPerNode;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->DBInstanceCategory) {
            $res['DBInstanceCategory'] = $this->DBInstanceCategory;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceClassType) {
            $res['DBInstanceClassType'] = $this->DBInstanceClassType;
        }
        if (null !== $this->DBInstanceCpuCores) {
            $res['DBInstanceCpuCores'] = $this->DBInstanceCpuCores;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceDiskMBPS) {
            $res['DBInstanceDiskMBPS'] = $this->DBInstanceDiskMBPS;
        }
        if (null !== $this->DBInstanceGroupCount) {
            $res['DBInstanceGroupCount'] = $this->DBInstanceGroupCount;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceMemory) {
            $res['DBInstanceMemory'] = $this->DBInstanceMemory;
        }
        if (null !== $this->DBInstanceMode) {
            $res['DBInstanceMode'] = $this->DBInstanceMode;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->hostType) {
            $res['HostType'] = $this->hostType;
        }
        if (null !== $this->idleTime) {
            $res['IdleTime'] = $this->idleTime;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->masterAISpec) {
            $res['MasterAISpec'] = $this->masterAISpec;
        }
        if (null !== $this->masterCU) {
            $res['MasterCU'] = $this->masterCU;
        }
        if (null !== $this->masterNodeNum) {
            $res['MasterNodeNum'] = $this->masterNodeNum;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->memoryPerNode) {
            $res['MemoryPerNode'] = $this->memoryPerNode;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->memoryUnit) {
            $res['MemoryUnit'] = $this->memoryUnit;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->prodType) {
            $res['ProdType'] = $this->prodType;
        }
        if (null !== $this->readDelayTime) {
            $res['ReadDelayTime'] = $this->readDelayTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->segDiskPerformanceLevel) {
            $res['SegDiskPerformanceLevel'] = $this->segDiskPerformanceLevel;
        }
        if (null !== $this->segNodeNum) {
            $res['SegNodeNum'] = $this->segNodeNum;
        }
        if (null !== $this->segmentAISpec) {
            $res['SegmentAISpec'] = $this->segmentAISpec;
        }
        if (null !== $this->segmentCounts) {
            $res['SegmentCounts'] = $this->segmentCounts;
        }
        if (null !== $this->serverlessMode) {
            $res['ServerlessMode'] = $this->serverlessMode;
        }
        if (null !== $this->serverlessResource) {
            $res['ServerlessResource'] = $this->serverlessResource;
        }
        if (null !== $this->standbyZoneId) {
            $res['StandbyZoneId'] = $this->standbyZoneId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->storagePerNode) {
            $res['StoragePerNode'] = $this->storagePerNode;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->storageUnit) {
            $res['StorageUnit'] = $this->storageUnit;
        }
        if (null !== $this->supportRestore) {
            $res['SupportRestore'] = $this->supportRestore;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vectorConfigurationStatus) {
            $res['VectorConfigurationStatus'] = $this->vectorConfigurationStatus;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailabilityValue'])) {
            $model->availabilityValue = $map['AvailabilityValue'];
        }
        if (isset($map['CacheStorageSize'])) {
            $model->cacheStorageSize = $map['CacheStorageSize'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['CoreVersion'])) {
            $model->coreVersion = $map['CoreVersion'];
        }
        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }
        if (isset($map['CpuCoresPerNode'])) {
            $model->cpuCoresPerNode = $map['CpuCoresPerNode'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DBInstanceCategory'])) {
            $model->DBInstanceCategory = $map['DBInstanceCategory'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceClassType'])) {
            $model->DBInstanceClassType = $map['DBInstanceClassType'];
        }
        if (isset($map['DBInstanceCpuCores'])) {
            $model->DBInstanceCpuCores = $map['DBInstanceCpuCores'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceDiskMBPS'])) {
            $model->DBInstanceDiskMBPS = $map['DBInstanceDiskMBPS'];
        }
        if (isset($map['DBInstanceGroupCount'])) {
            $model->DBInstanceGroupCount = $map['DBInstanceGroupCount'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceMemory'])) {
            $model->DBInstanceMemory = $map['DBInstanceMemory'];
        }
        if (isset($map['DBInstanceMode'])) {
            $model->DBInstanceMode = $map['DBInstanceMode'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['HostType'])) {
            $model->hostType = $map['HostType'];
        }
        if (isset($map['IdleTime'])) {
            $model->idleTime = $map['IdleTime'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['MasterAISpec'])) {
            $model->masterAISpec = $map['MasterAISpec'];
        }
        if (isset($map['MasterCU'])) {
            $model->masterCU = $map['MasterCU'];
        }
        if (isset($map['MasterNodeNum'])) {
            $model->masterNodeNum = $map['MasterNodeNum'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MemoryPerNode'])) {
            $model->memoryPerNode = $map['MemoryPerNode'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['MemoryUnit'])) {
            $model->memoryUnit = $map['MemoryUnit'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ProdType'])) {
            $model->prodType = $map['ProdType'];
        }
        if (isset($map['ReadDelayTime'])) {
            $model->readDelayTime = $map['ReadDelayTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['SegDiskPerformanceLevel'])) {
            $model->segDiskPerformanceLevel = $map['SegDiskPerformanceLevel'];
        }
        if (isset($map['SegNodeNum'])) {
            $model->segNodeNum = $map['SegNodeNum'];
        }
        if (isset($map['SegmentAISpec'])) {
            $model->segmentAISpec = $map['SegmentAISpec'];
        }
        if (isset($map['SegmentCounts'])) {
            $model->segmentCounts = $map['SegmentCounts'];
        }
        if (isset($map['ServerlessMode'])) {
            $model->serverlessMode = $map['ServerlessMode'];
        }
        if (isset($map['ServerlessResource'])) {
            $model->serverlessResource = $map['ServerlessResource'];
        }
        if (isset($map['StandbyZoneId'])) {
            $model->standbyZoneId = $map['StandbyZoneId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StoragePerNode'])) {
            $model->storagePerNode = $map['StoragePerNode'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['StorageUnit'])) {
            $model->storageUnit = $map['StorageUnit'];
        }
        if (isset($map['SupportRestore'])) {
            $model->supportRestore = $map['SupportRestore'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VectorConfigurationStatus'])) {
            $model->vectorConfigurationStatus = $map['VectorConfigurationStatus'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
