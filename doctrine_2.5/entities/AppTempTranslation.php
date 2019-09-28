<?php



/**
 * AppTempTranslation
 */
class AppTempTranslation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codeErp;

    /**
     * @var string
     */
    private $descriptionTr;

    /**
     * @var integer
     */
    private $idSource;

    /**
     * @var integer
     */
    private $idLanguage;


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
     * Set codeErp
     *
     * @param string $codeErp
     *
     * @return AppTempTranslation
     */
    public function setCodeErp($codeErp)
    {
        $this->codeErp = $codeErp;

        return $this;
    }

    /**
     * Get codeErp
     *
     * @return string
     */
    public function getCodeErp()
    {
        return $this->codeErp;
    }

    /**
     * Set descriptionTr
     *
     * @param string $descriptionTr
     *
     * @return AppTempTranslation
     */
    public function setDescriptionTr($descriptionTr)
    {
        $this->descriptionTr = $descriptionTr;

        return $this;
    }

    /**
     * Get descriptionTr
     *
     * @return string
     */
    public function getDescriptionTr()
    {
        return $this->descriptionTr;
    }

    /**
     * Set idSource
     *
     * @param integer $idSource
     *
     * @return AppTempTranslation
     */
    public function setIdSource($idSource)
    {
        $this->idSource = $idSource;

        return $this;
    }

    /**
     * Get idSource
     *
     * @return integer
     */
    public function getIdSource()
    {
        return $this->idSource;
    }

    /**
     * Set idLanguage
     *
     * @param integer $idLanguage
     *
     * @return AppTempTranslation
     */
    public function setIdLanguage($idLanguage)
    {
        $this->idLanguage = $idLanguage;

        return $this;
    }

    /**
     * Get idLanguage
     *
     * @return integer
     */
    public function getIdLanguage()
    {
        return $this->idLanguage;
    }
}

