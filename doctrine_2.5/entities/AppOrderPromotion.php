<?php



/**
 * AppOrderPromotion
 */
class AppOrderPromotion
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
    private $upaderDate;

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
    private $idTypePayment;

    /**
     * @var integer
     */
    private $minUnits;

    /**
     * @var float
     */
    private $minUnitsDiscount;

    /**
     * @var integer
     */
    private $unitsForFree;

    /**
     * @var integer
     */
    private $unitsFree;


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
     * @return AppOrderPromotion
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
     * @return AppOrderPromotion
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
     * @return AppOrderPromotion
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
     * @return AppOrderPromotion
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
     * @return AppOrderPromotion
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
     * @return AppOrderPromotion
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
     * Set upaderDate
     *
     * @param string $upaderDate
     *
     * @return AppOrderPromotion
     */
    public function setUpaderDate($upaderDate)
    {
        $this->upaderDate = $upaderDate;

        return $this;
    }

    /**
     * Get upaderDate
     *
     * @return string
     */
    public function getUpaderDate()
    {
        return $this->upaderDate;
    }

    /**
     * Set deletePlatform
     *
     * @param string $deletePlatform
     *
     * @return AppOrderPromotion
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
     * @return AppOrderPromotion
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
     * @return AppOrderPromotion
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
     * @return AppOrderPromotion
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
     * @return AppOrderPromotion
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
     * @return AppOrderPromotion
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
     * @return AppOrderPromotion
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
     * @return AppOrderPromotion
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
     * @return AppOrderPromotion
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
     * Set idTypePayment
     *
     * @param integer $idTypePayment
     *
     * @return AppOrderPromotion
     */
    public function setIdTypePayment($idTypePayment)
    {
        $this->idTypePayment = $idTypePayment;

        return $this;
    }

    /**
     * Get idTypePayment
     *
     * @return integer
     */
    public function getIdTypePayment()
    {
        return $this->idTypePayment;
    }

    /**
     * Set minUnits
     *
     * @param integer $minUnits
     *
     * @return AppOrderPromotion
     */
    public function setMinUnits($minUnits)
    {
        $this->minUnits = $minUnits;

        return $this;
    }

    /**
     * Get minUnits
     *
     * @return integer
     */
    public function getMinUnits()
    {
        return $this->minUnits;
    }

    /**
     * Set minUnitsDiscount
     *
     * @param float $minUnitsDiscount
     *
     * @return AppOrderPromotion
     */
    public function setMinUnitsDiscount($minUnitsDiscount)
    {
        $this->minUnitsDiscount = $minUnitsDiscount;

        return $this;
    }

    /**
     * Get minUnitsDiscount
     *
     * @return float
     */
    public function getMinUnitsDiscount()
    {
        return $this->minUnitsDiscount;
    }

    /**
     * Set unitsForFree
     *
     * @param integer $unitsForFree
     *
     * @return AppOrderPromotion
     */
    public function setUnitsForFree($unitsForFree)
    {
        $this->unitsForFree = $unitsForFree;

        return $this;
    }

    /**
     * Get unitsForFree
     *
     * @return integer
     */
    public function getUnitsForFree()
    {
        return $this->unitsForFree;
    }

    /**
     * Set unitsFree
     *
     * @param integer $unitsFree
     *
     * @return AppOrderPromotion
     */
    public function setUnitsFree($unitsFree)
    {
        $this->unitsFree = $unitsFree;

        return $this;
    }

    /**
     * Get unitsFree
     *
     * @return integer
     */
    public function getUnitsFree()
    {
        return $this->unitsFree;
    }
}

