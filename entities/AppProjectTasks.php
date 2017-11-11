<?php



/**
 * AppProjectTasks
 */
class AppProjectTasks
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
     * @var string
     */
    private $codeErp;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $dateOpen;

    /**
     * @var string
     */
    private $dateClose;

    /**
     * @var integer
     */
    private $idProject;

    /**
     * @var integer
     */
    private $idUserTo;

    /**
     * @var string
     */
    private $notesDetail;

    /**
     * @var string
     */
    private $notesTo;

    /**
     * @var integer
     */
    private $idUserBy;

    /**
     * @var integer
     */
    private $idTypePriority;

    /**
     * @var integer
     */
    private $idTypeStatus;

    /**
     * @var float
     */
    private $hours;

    /**
     * @var integer
     */
    private $idTypePercent;


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
     * @return AppProjectTasks
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
     * @return AppProjectTasks
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
     * @return AppProjectTasks
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
     * @return AppProjectTasks
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
     * @return AppProjectTasks
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
     * @return AppProjectTasks
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
     * @return AppProjectTasks
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
     * @return AppProjectTasks
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
     * @return AppProjectTasks
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
     * @return AppProjectTasks
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
     * @return AppProjectTasks
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
     * @return AppProjectTasks
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
     * @return AppProjectTasks
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
     * @return AppProjectTasks
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
     * Set codeErp
     *
     * @param string $codeErp
     *
     * @return AppProjectTasks
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
     * Set description
     *
     * @param string $description
     *
     * @return AppProjectTasks
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
     * Set dateOpen
     *
     * @param string $dateOpen
     *
     * @return AppProjectTasks
     */
    public function setDateOpen($dateOpen)
    {
        $this->dateOpen = $dateOpen;

        return $this;
    }

    /**
     * Get dateOpen
     *
     * @return string
     */
    public function getDateOpen()
    {
        return $this->dateOpen;
    }

    /**
     * Set dateClose
     *
     * @param string $dateClose
     *
     * @return AppProjectTasks
     */
    public function setDateClose($dateClose)
    {
        $this->dateClose = $dateClose;

        return $this;
    }

    /**
     * Get dateClose
     *
     * @return string
     */
    public function getDateClose()
    {
        return $this->dateClose;
    }

    /**
     * Set idProject
     *
     * @param integer $idProject
     *
     * @return AppProjectTasks
     */
    public function setIdProject($idProject)
    {
        $this->idProject = $idProject;

        return $this;
    }

    /**
     * Get idProject
     *
     * @return integer
     */
    public function getIdProject()
    {
        return $this->idProject;
    }

    /**
     * Set idUserTo
     *
     * @param integer $idUserTo
     *
     * @return AppProjectTasks
     */
    public function setIdUserTo($idUserTo)
    {
        $this->idUserTo = $idUserTo;

        return $this;
    }

    /**
     * Get idUserTo
     *
     * @return integer
     */
    public function getIdUserTo()
    {
        return $this->idUserTo;
    }

    /**
     * Set notesDetail
     *
     * @param string $notesDetail
     *
     * @return AppProjectTasks
     */
    public function setNotesDetail($notesDetail)
    {
        $this->notesDetail = $notesDetail;

        return $this;
    }

    /**
     * Get notesDetail
     *
     * @return string
     */
    public function getNotesDetail()
    {
        return $this->notesDetail;
    }

    /**
     * Set notesTo
     *
     * @param string $notesTo
     *
     * @return AppProjectTasks
     */
    public function setNotesTo($notesTo)
    {
        $this->notesTo = $notesTo;

        return $this;
    }

    /**
     * Get notesTo
     *
     * @return string
     */
    public function getNotesTo()
    {
        return $this->notesTo;
    }

    /**
     * Set idUserBy
     *
     * @param integer $idUserBy
     *
     * @return AppProjectTasks
     */
    public function setIdUserBy($idUserBy)
    {
        $this->idUserBy = $idUserBy;

        return $this;
    }

    /**
     * Get idUserBy
     *
     * @return integer
     */
    public function getIdUserBy()
    {
        return $this->idUserBy;
    }

    /**
     * Set idTypePriority
     *
     * @param integer $idTypePriority
     *
     * @return AppProjectTasks
     */
    public function setIdTypePriority($idTypePriority)
    {
        $this->idTypePriority = $idTypePriority;

        return $this;
    }

    /**
     * Get idTypePriority
     *
     * @return integer
     */
    public function getIdTypePriority()
    {
        return $this->idTypePriority;
    }

    /**
     * Set idTypeStatus
     *
     * @param integer $idTypeStatus
     *
     * @return AppProjectTasks
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

    /**
     * Set hours
     *
     * @param float $hours
     *
     * @return AppProjectTasks
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get hours
     *
     * @return float
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set idTypePercent
     *
     * @param integer $idTypePercent
     *
     * @return AppProjectTasks
     */
    public function setIdTypePercent($idTypePercent)
    {
        $this->idTypePercent = $idTypePercent;

        return $this;
    }

    /**
     * Get idTypePercent
     *
     * @return integer
     */
    public function getIdTypePercent()
    {
        return $this->idTypePercent;
    }
}

