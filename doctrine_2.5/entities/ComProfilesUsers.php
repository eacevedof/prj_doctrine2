<?php



/**
 * ComProfilesUsers
 */
class ComProfilesUsers
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
    private $idUser;


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
     * @return ComProfilesUsers
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
     * @return ComProfilesUsers
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
     * @return ComProfilesUsers
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
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return ComProfilesUsers
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}

