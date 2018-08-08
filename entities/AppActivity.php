<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppActivity
 */
class AppActivity
{
    /**
    * @var Id
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
    private $dateProgrammed;

    /**
     * @var string
     */
    private $hourProgrammedFrom;

    /**
     * @var string
     */
    private $hourProgrammedTo;

    /**
     * @var string
     */
    private $dateAccomplished;

    /**
     * @var string
     */
    private $hourAccomplishedFrom;

    /**
     * @var string
     */
    private $hourAccomplishedTo;

    /**
     * @var integer
     */
    private $idCostumer;

    /**
     * @var integer
     */
    private $idSeller;

    /**
     * @var integer
     */
    private $idContact;


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
     * @return AppActivity
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
     * @return AppActivity
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
     * @return AppActivity
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
     * @return AppActivity
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
     * @return AppActivity
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
     * @return AppActivity
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
     * @return AppActivity
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
     * @return AppActivity
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
     * @return AppActivity
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
     * @return AppActivity
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
     * @return AppActivity
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
     * @return AppActivity
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
     * @return AppActivity
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
     * @return AppActivity
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
     * @return AppActivity
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
     * @return AppActivity
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
     * Set dateProgrammed
     *
     * @param string $dateProgrammed
     *
     * @return AppActivity
     */
    public function setDateProgrammed($dateProgrammed)
    {
        $this->dateProgrammed = $dateProgrammed;

        return $this;
    }

    /**
     * Get dateProgrammed
     *
     * @return string
     */
    public function getDateProgrammed()
    {
        return $this->dateProgrammed;
    }

    /**
     * Set hourProgrammedFrom
     *
     * @param string $hourProgrammedFrom
     *
     * @return AppActivity
     */
    public function setHourProgrammedFrom($hourProgrammedFrom)
    {
        $this->hourProgrammedFrom = $hourProgrammedFrom;

        return $this;
    }

    /**
     * Get hourProgrammedFrom
     *
     * @return string
     */
    public function getHourProgrammedFrom()
    {
        return $this->hourProgrammedFrom;
    }

    /**
     * Set hourProgrammedTo
     *
     * @param string $hourProgrammedTo
     *
     * @return AppActivity
     */
    public function setHourProgrammedTo($hourProgrammedTo)
    {
        $this->hourProgrammedTo = $hourProgrammedTo;

        return $this;
    }

    /**
     * Get hourProgrammedTo
     *
     * @return string
     */
    public function getHourProgrammedTo()
    {
        return $this->hourProgrammedTo;
    }

    /**
     * Set dateAccomplished
     *
     * @param string $dateAccomplished
     *
     * @return AppActivity
     */
    public function setDateAccomplished($dateAccomplished)
    {
        $this->dateAccomplished = $dateAccomplished;

        return $this;
    }

    /**
     * Get dateAccomplished
     *
     * @return string
     */
    public function getDateAccomplished()
    {
        return $this->dateAccomplished;
    }

    /**
     * Set hourAccomplishedFrom
     *
     * @param string $hourAccomplishedFrom
     *
     * @return AppActivity
     */
    public function setHourAccomplishedFrom($hourAccomplishedFrom)
    {
        $this->hourAccomplishedFrom = $hourAccomplishedFrom;

        return $this;
    }

    /**
     * Get hourAccomplishedFrom
     *
     * @return string
     */
    public function getHourAccomplishedFrom()
    {
        return $this->hourAccomplishedFrom;
    }

    /**
     * Set hourAccomplishedTo
     *
     * @param string $hourAccomplishedTo
     *
     * @return AppActivity
     */
    public function setHourAccomplishedTo($hourAccomplishedTo)
    {
        $this->hourAccomplishedTo = $hourAccomplishedTo;

        return $this;
    }

    /**
     * Get hourAccomplishedTo
     *
     * @return string
     */
    public function getHourAccomplishedTo()
    {
        return $this->hourAccomplishedTo;
    }

    /**
     * Set idCostumer
     *
     * @param integer $idCostumer
     *
     * @return AppActivity
     */
    public function setIdCostumer($idCostumer)
    {
        $this->idCostumer = $idCostumer;

        return $this;
    }

    /**
     * Get idCostumer
     *
     * @return integer
     */
    public function getIdCostumer()
    {
        return $this->idCostumer;
    }

    /**
     * Set idSeller
     *
     * @param integer $idSeller
     *
     * @return AppActivity
     */
    public function setIdSeller($idSeller)
    {
        $this->idSeller = $idSeller;

        return $this;
    }

    /**
     * Get idSeller
     *
     * @return integer
     */
    public function getIdSeller()
    {
        return $this->idSeller;
    }

    /**
     * Set idContact
     *
     * @param integer $idContact
     *
     * @return AppActivity
     */
    public function setIdContact($idContact)
    {
        $this->idContact = $idContact;

        return $this;
    }

    /**
     * Get idContact
     *
     * @return integer
     */
    public function getIdContact()
    {
        return $this->idContact;
    }
}

