<?php



/**
 * ComSyncpoolIn
 */
class ComSyncpoolIn
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idSync;

    /**
     * @var string
     */
    private $serverDatetime;

    /**
     * @var string
     */
    private $deviceDatetime;

    /**
     * @var string
     */
    private $csvKeys;

    /**
     * @var string
     */
    private $csvValues;

    /**
     * @var integer
     */
    private $serverStatus;

    /**
     * @var integer
     */
    private $deviceStatus;

    /**
     * @var integer
     */
    private $idDevicePool;

    /**
     * @var integer
     */
    private $idTypeStatus;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idSync
     *
     * @param integer $idSync
     *
     * @return ComSyncpoolIn
     */
    public function setIdSync($idSync)
    {
        $this->idSync = $idSync;

        return $this;
    }

    /**
     * Get idSync
     *
     * @return integer
     */
    public function getIdSync()
    {
        return $this->idSync;
    }

    /**
     * Set serverDatetime
     *
     * @param string $serverDatetime
     *
     * @return ComSyncpoolIn
     */
    public function setServerDatetime($serverDatetime)
    {
        $this->serverDatetime = $serverDatetime;

        return $this;
    }

    /**
     * Get serverDatetime
     *
     * @return string
     */
    public function getServerDatetime()
    {
        return $this->serverDatetime;
    }

    /**
     * Set deviceDatetime
     *
     * @param string $deviceDatetime
     *
     * @return ComSyncpoolIn
     */
    public function setDeviceDatetime($deviceDatetime)
    {
        $this->deviceDatetime = $deviceDatetime;

        return $this;
    }

    /**
     * Get deviceDatetime
     *
     * @return string
     */
    public function getDeviceDatetime()
    {
        return $this->deviceDatetime;
    }

    /**
     * Set csvKeys
     *
     * @param string $csvKeys
     *
     * @return ComSyncpoolIn
     */
    public function setCsvKeys($csvKeys)
    {
        $this->csvKeys = $csvKeys;

        return $this;
    }

    /**
     * Get csvKeys
     *
     * @return string
     */
    public function getCsvKeys()
    {
        return $this->csvKeys;
    }

    /**
     * Set csvValues
     *
     * @param string $csvValues
     *
     * @return ComSyncpoolIn
     */
    public function setCsvValues($csvValues)
    {
        $this->csvValues = $csvValues;

        return $this;
    }

    /**
     * Get csvValues
     *
     * @return string
     */
    public function getCsvValues()
    {
        return $this->csvValues;
    }

    /**
     * Set serverStatus
     *
     * @param integer $serverStatus
     *
     * @return ComSyncpoolIn
     */
    public function setServerStatus($serverStatus)
    {
        $this->serverStatus = $serverStatus;

        return $this;
    }

    /**
     * Get serverStatus
     *
     * @return integer
     */
    public function getServerStatus()
    {
        return $this->serverStatus;
    }

    /**
     * Set deviceStatus
     *
     * @param integer $deviceStatus
     *
     * @return ComSyncpoolIn
     */
    public function setDeviceStatus($deviceStatus)
    {
        $this->deviceStatus = $deviceStatus;

        return $this;
    }

    /**
     * Get deviceStatus
     *
     * @return integer
     */
    public function getDeviceStatus()
    {
        return $this->deviceStatus;
    }

    /**
     * Set idDevicePool
     *
     * @param integer $idDevicePool
     *
     * @return ComSyncpoolIn
     */
    public function setIdDevicePool($idDevicePool)
    {
        $this->idDevicePool = $idDevicePool;

        return $this;
    }

    /**
     * Get idDevicePool
     *
     * @return integer
     */
    public function getIdDevicePool()
    {
        return $this->idDevicePool;
    }

    /**
     * Set idTypeStatus
     *
     * @param integer $idTypeStatus
     *
     * @return ComSyncpoolIn
     */
    public function setIdTypeStatus($idTypeStatus)
    {
        $this->idTypeStatus = $idTypeStatus;

        return $this;
    }

    /**
     * Get idTypeStatus
     *
     * @return integer
     */
    public function getIdTypeStatus()
    {
        return $this->idTypeStatus;
    }
}

