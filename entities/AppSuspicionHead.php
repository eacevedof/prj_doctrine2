<?php



/**
 * AppSuspicionHead
 */
class AppSuspicionHead
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
     * @var integer
     */
    private $idTransfer;

    /**
     * @var integer
     */
    private $idIsr;

    /**
     * @var string
     */
    private $pathLo;

    /**
     * @var string
     */
    private $officeName;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $observations;

    /**
     * @var string
     */
    private $userCreation;

    /**
     * @var string
     */
    private $dateCreation;

    /**
     * @var string
     */
    private $hourCreation;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $typeChar;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var string
     */
    private $amountCash;

    /**
     * @var string
     */
    private $filialName;

    /**
     * @var string
     */
    private $notes;


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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * @return AppSuspicionHead
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
     * Set idTransfer
     *
     * @param integer $idTransfer
     *
     * @return AppSuspicionHead
     */
    public function setIdTransfer($idTransfer)
    {
        $this->idTransfer = $idTransfer;

        return $this;
    }

    /**
     * Get idTransfer
     *
     * @return integer
     */
    public function getIdTransfer()
    {
        return $this->idTransfer;
    }

    /**
     * Set idIsr
     *
     * @param integer $idIsr
     *
     * @return AppSuspicionHead
     */
    public function setIdIsr($idIsr)
    {
        $this->idIsr = $idIsr;

        return $this;
    }

    /**
     * Get idIsr
     *
     * @return integer
     */
    public function getIdIsr()
    {
        return $this->idIsr;
    }

    /**
     * Set pathLo
     *
     * @param string $pathLo
     *
     * @return AppSuspicionHead
     */
    public function setPathLo($pathLo)
    {
        $this->pathLo = $pathLo;

        return $this;
    }

    /**
     * Get pathLo
     *
     * @return string
     */
    public function getPathLo()
    {
        return $this->pathLo;
    }

    /**
     * Set officeName
     *
     * @param string $officeName
     *
     * @return AppSuspicionHead
     */
    public function setOfficeName($officeName)
    {
        $this->officeName = $officeName;

        return $this;
    }

    /**
     * Get officeName
     *
     * @return string
     */
    public function getOfficeName()
    {
        return $this->officeName;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return AppSuspicionHead
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return AppSuspicionHead
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set userCreation
     *
     * @param string $userCreation
     *
     * @return AppSuspicionHead
     */
    public function setUserCreation($userCreation)
    {
        $this->userCreation = $userCreation;

        return $this;
    }

    /**
     * Get userCreation
     *
     * @return string
     */
    public function getUserCreation()
    {
        return $this->userCreation;
    }

    /**
     * Set dateCreation
     *
     * @param string $dateCreation
     *
     * @return AppSuspicionHead
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return string
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set hourCreation
     *
     * @param string $hourCreation
     *
     * @return AppSuspicionHead
     */
    public function setHourCreation($hourCreation)
    {
        $this->hourCreation = $hourCreation;

        return $this;
    }

    /**
     * Get hourCreation
     *
     * @return string
     */
    public function getHourCreation()
    {
        return $this->hourCreation;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return AppSuspicionHead
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set typeChar
     *
     * @param string $typeChar
     *
     * @return AppSuspicionHead
     */
    public function setTypeChar($typeChar)
    {
        $this->typeChar = $typeChar;

        return $this;
    }

    /**
     * Get typeChar
     *
     * @return string
     */
    public function getTypeChar()
    {
        return $this->typeChar;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return AppSuspicionHead
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set amountCash
     *
     * @param string $amountCash
     *
     * @return AppSuspicionHead
     */
    public function setAmountCash($amountCash)
    {
        $this->amountCash = $amountCash;

        return $this;
    }

    /**
     * Get amountCash
     *
     * @return string
     */
    public function getAmountCash()
    {
        return $this->amountCash;
    }

    /**
     * Set filialName
     *
     * @param string $filialName
     *
     * @return AppSuspicionHead
     */
    public function setFilialName($filialName)
    {
        $this->filialName = $filialName;

        return $this;
    }

    /**
     * Get filialName
     *
     * @return string
     */
    public function getFilialName()
    {
        return $this->filialName;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return AppSuspicionHead
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }
}

