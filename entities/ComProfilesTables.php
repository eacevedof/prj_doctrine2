<?php



/**
 * ComProfilesTables
 */
class ComProfilesTables
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $processflag;

    /**
     * @var string
     */
    private $isEnabled;

    /**
     * @var integer
     */
    private $idComProfile;

    /**
     * @var integer
     */
    private $idComTable;

    /**
     * @var integer
     */
    private $orderBy;

    /**
     * @var string
     */
    private $sqlOut;

    /**
     * @var string
     */
    private $sqlIn;


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
     * Set processflag
     *
     * @param string $processflag
     *
     * @return ComProfilesTables
     */
    public function setProcessflag($processflag)
    {
        $this->processflag = $processflag;

        return $this;
    }

    /**
     * Get processflag
     *
     * @return string
     */
    public function getProcessflag()
    {
        return $this->processflag;
    }

    /**
     * Set isEnabled
     *
     * @param string $isEnabled
     *
     * @return ComProfilesTables
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return string
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set idComProfile
     *
     * @param integer $idComProfile
     *
     * @return ComProfilesTables
     */
    public function setIdComProfile($idComProfile)
    {
        $this->idComProfile = $idComProfile;

        return $this;
    }

    /**
     * Get idComProfile
     *
     * @return integer
     */
    public function getIdComProfile()
    {
        return $this->idComProfile;
    }

    /**
     * Set idComTable
     *
     * @param integer $idComTable
     *
     * @return ComProfilesTables
     */
    public function setIdComTable($idComTable)
    {
        $this->idComTable = $idComTable;

        return $this;
    }

    /**
     * Get idComTable
     *
     * @return integer
     */
    public function getIdComTable()
    {
        return $this->idComTable;
    }

    /**
     * Set orderBy
     *
     * @param integer $orderBy
     *
     * @return ComProfilesTables
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;

        return $this;
    }

    /**
     * Get orderBy
     *
     * @return integer
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * Set sqlOut
     *
     * @param string $sqlOut
     *
     * @return ComProfilesTables
     */
    public function setSqlOut($sqlOut)
    {
        $this->sqlOut = $sqlOut;

        return $this;
    }

    /**
     * Get sqlOut
     *
     * @return string
     */
    public function getSqlOut()
    {
        return $this->sqlOut;
    }

    /**
     * Set sqlIn
     *
     * @param string $sqlIn
     *
     * @return ComProfilesTables
     */
    public function setSqlIn($sqlIn)
    {
        $this->sqlIn = $sqlIn;

        return $this;
    }

    /**
     * Get sqlIn
     *
     * @return string
     */
    public function getSqlIn()
    {
        return $this->sqlIn;
    }
}

