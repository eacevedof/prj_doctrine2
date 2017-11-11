<?php



/**
 * ComSync
 */
class ComSync
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idDeviceUser;

    /**
     * @var string
     */
    private $lastDate;

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
     * Set idDeviceUser
     *
     * @param integer $idDeviceUser
     *
     * @return ComSync
     */
    public function setIdDeviceUser($idDeviceUser)
    {
        $this->idDeviceUser = $idDeviceUser;

        return $this;
    }

    /**
     * Get idDeviceUser
     *
     * @return integer
     */
    public function getIdDeviceUser()
    {
        return $this->idDeviceUser;
    }

    /**
     * Set lastDate
     *
     * @param string $lastDate
     *
     * @return ComSync
     */
    public function setLastDate($lastDate)
    {
        $this->lastDate = $lastDate;

        return $this;
    }

    /**
     * Get lastDate
     *
     * @return string
     */
    public function getLastDate()
    {
        return $this->lastDate;
    }

    /**
     * Set idTypeStatus
     *
     * @param integer $idTypeStatus
     *
     * @return ComSync
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

