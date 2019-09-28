<?php



/**
 * ComSyncpoolOut
 */
class ComSyncpoolOut
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
     * @var integer
     */
    private $irow;

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
     * @return ComSyncpoolOut
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
     * @return ComSyncpoolOut
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
     * @return ComSyncpoolOut
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
     * Set irow
     *
     * @param integer $irow
     *
     * @return ComSyncpoolOut
     */
    public function setIrow($irow)
    {
        $this->irow = $irow;

        return $this;
    }

    /**
     * Get irow
     *
     * @return integer
     */
    public function getIrow()
    {
        return $this->irow;
    }

    /**
     * Set serverStatus
     *
     * @param integer $serverStatus
     *
     * @return ComSyncpoolOut
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
     * @return ComSyncpoolOut
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
     * Set idTypeStatus
     *
     * @param integer $idTypeStatus
     *
     * @return ComSyncpoolOut
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

