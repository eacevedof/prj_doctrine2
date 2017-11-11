<?php



/**
 * ComSyncTable
 */
class ComSyncTable
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
     * @var integer
     */
    private $idTable;

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
     * @return ComSyncTable
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
     * Set idTable
     *
     * @param integer $idTable
     *
     * @return ComSyncTable
     */
    public function setIdTable($idTable)
    {
        $this->idTable = $idTable;

        return $this;
    }

    /**
     * Get idTable
     *
     * @return integer
     */
    public function getIdTable()
    {
        return $this->idTable;
    }

    /**
     * Set idTypeStatus
     *
     * @param integer $idTypeStatus
     *
     * @return ComSyncTable
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

