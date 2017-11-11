<?php



/**
 * AppCmsModuleSectionsLang
 */
class AppCmsModuleSectionsLang
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
    private $insertPlatform;

    /**
     * @var string
     */
    private $insertUser;

    /**
     * @var string
     */
    private $insertDate;

    /**
     * @var string
     */
    private $updatePlatform;

    /**
     * @var string
     */
    private $updateUser;

    /**
     * @var string
     */
    private $updateDate;

    /**
     * @var string
     */
    private $deletePlatform;

    /**
     * @var string
     */
    private $deleteUser;

    /**
     * @var string
     */
    private $deleteDate;

    /**
     * @var string
     */
    private $cruCsvnote;

    /**
     * @var string
     */
    private $isErpsent;

    /**
     * @var string
     */
    private $isEnabled;

    /**
     * @var integer
     */
    private $i;

    /**
     * @var integer
     */
    private $idSource;

    /**
     * @var integer
     */
    private $idLanguage;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $resume;

    /**
     * @var integer
     */
    private $orderBy;


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
     * @return AppCmsModuleSectionsLang
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
     * Set insertPlatform
     *
     * @param string $insertPlatform
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setInsertPlatform($insertPlatform)
    {
        $this->insertPlatform = $insertPlatform;

        return $this;
    }

    /**
     * Get insertPlatform
     *
     * @return string
     */
    public function getInsertPlatform()
    {
        return $this->insertPlatform;
    }

    /**
     * Set insertUser
     *
     * @param string $insertUser
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setInsertUser($insertUser)
    {
        $this->insertUser = $insertUser;

        return $this;
    }

    /**
     * Get insertUser
     *
     * @return string
     */
    public function getInsertUser()
    {
        return $this->insertUser;
    }

    /**
     * Set insertDate
     *
     * @param string $insertDate
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setInsertDate($insertDate)
    {
        $this->insertDate = $insertDate;

        return $this;
    }

    /**
     * Get insertDate
     *
     * @return string
     */
    public function getInsertDate()
    {
        return $this->insertDate;
    }

    /**
     * Set updatePlatform
     *
     * @param string $updatePlatform
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setUpdatePlatform($updatePlatform)
    {
        $this->updatePlatform = $updatePlatform;

        return $this;
    }

    /**
     * Get updatePlatform
     *
     * @return string
     */
    public function getUpdatePlatform()
    {
        return $this->updatePlatform;
    }

    /**
     * Set updateUser
     *
     * @param string $updateUser
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setUpdateUser($updateUser)
    {
        $this->updateUser = $updateUser;

        return $this;
    }

    /**
     * Get updateUser
     *
     * @return string
     */
    public function getUpdateUser()
    {
        return $this->updateUser;
    }

    /**
     * Set updateDate
     *
     * @param string $updateDate
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return string
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set deletePlatform
     *
     * @param string $deletePlatform
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setDeletePlatform($deletePlatform)
    {
        $this->deletePlatform = $deletePlatform;

        return $this;
    }

    /**
     * Get deletePlatform
     *
     * @return string
     */
    public function getDeletePlatform()
    {
        return $this->deletePlatform;
    }

    /**
     * Set deleteUser
     *
     * @param string $deleteUser
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setDeleteUser($deleteUser)
    {
        $this->deleteUser = $deleteUser;

        return $this;
    }

    /**
     * Get deleteUser
     *
     * @return string
     */
    public function getDeleteUser()
    {
        return $this->deleteUser;
    }

    /**
     * Set deleteDate
     *
     * @param string $deleteDate
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setDeleteDate($deleteDate)
    {
        $this->deleteDate = $deleteDate;

        return $this;
    }

    /**
     * Get deleteDate
     *
     * @return string
     */
    public function getDeleteDate()
    {
        return $this->deleteDate;
    }

    /**
     * Set cruCsvnote
     *
     * @param string $cruCsvnote
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setCruCsvnote($cruCsvnote)
    {
        $this->cruCsvnote = $cruCsvnote;

        return $this;
    }

    /**
     * Get cruCsvnote
     *
     * @return string
     */
    public function getCruCsvnote()
    {
        return $this->cruCsvnote;
    }

    /**
     * Set isErpsent
     *
     * @param string $isErpsent
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setIsErpsent($isErpsent)
    {
        $this->isErpsent = $isErpsent;

        return $this;
    }

    /**
     * Get isErpsent
     *
     * @return string
     */
    public function getIsErpsent()
    {
        return $this->isErpsent;
    }

    /**
     * Set isEnabled
     *
     * @param string $isEnabled
     *
     * @return AppCmsModuleSectionsLang
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
     * Set i
     *
     * @param integer $i
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setI($i)
    {
        $this->i = $i;

        return $this;
    }

    /**
     * Get i
     *
     * @return integer
     */
    public function getI()
    {
        return $this->i;
    }

    /**
     * Set idSource
     *
     * @param integer $idSource
     *
     * @return AppCmsModuleSectionsLang
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
     * @return AppCmsModuleSectionsLang
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return AppCmsModuleSectionsLang
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set orderBy
     *
     * @param integer $orderBy
     *
     * @return AppCmsModuleSectionsLang
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
}

