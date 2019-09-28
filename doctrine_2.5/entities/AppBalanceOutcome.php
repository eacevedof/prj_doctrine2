<?php



/**
 * AppBalanceOutcome
 */
class AppBalanceOutcome
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
    private $idProvider;

    /**
     * @var integer
     */
    private $idType;

    /**
     * @var string
     */
    private $receiptNr;

    /**
     * @var string
     */
    private $receiptDate;

    /**
     * @var string
     */
    private $operationDate;

    /**
     * @var float
     */
    private $subtotalBusiness;

    /**
     * @var float
     */
    private $subtotalOwn;

    /**
     * @var float
     */
    private $subtotal;

    /**
     * @var float
     */
    private $totalOut;

    /**
     * @var float
     */
    private $totalPending;

    /**
     * @var integer
     */
    private $isPaid;

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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * @return AppBalanceOutcome
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
     * Set idProvider
     *
     * @param integer $idProvider
     *
     * @return AppBalanceOutcome
     */
    public function setIdProvider($idProvider)
    {
        $this->idProvider = $idProvider;

        return $this;
    }

    /**
     * Get idProvider
     *
     * @return integer
     */
    public function getIdProvider()
    {
        return $this->idProvider;
    }

    /**
     * Set idType
     *
     * @param integer $idType
     *
     * @return AppBalanceOutcome
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return integer
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Set receiptNr
     *
     * @param string $receiptNr
     *
     * @return AppBalanceOutcome
     */
    public function setReceiptNr($receiptNr)
    {
        $this->receiptNr = $receiptNr;

        return $this;
    }

    /**
     * Get receiptNr
     *
     * @return string
     */
    public function getReceiptNr()
    {
        return $this->receiptNr;
    }

    /**
     * Set receiptDate
     *
     * @param string $receiptDate
     *
     * @return AppBalanceOutcome
     */
    public function setReceiptDate($receiptDate)
    {
        $this->receiptDate = $receiptDate;

        return $this;
    }

    /**
     * Get receiptDate
     *
     * @return string
     */
    public function getReceiptDate()
    {
        return $this->receiptDate;
    }

    /**
     * Set operationDate
     *
     * @param string $operationDate
     *
     * @return AppBalanceOutcome
     */
    public function setOperationDate($operationDate)
    {
        $this->operationDate = $operationDate;

        return $this;
    }

    /**
     * Get operationDate
     *
     * @return string
     */
    public function getOperationDate()
    {
        return $this->operationDate;
    }

    /**
     * Set subtotalBusiness
     *
     * @param float $subtotalBusiness
     *
     * @return AppBalanceOutcome
     */
    public function setSubtotalBusiness($subtotalBusiness)
    {
        $this->subtotalBusiness = $subtotalBusiness;

        return $this;
    }

    /**
     * Get subtotalBusiness
     *
     * @return float
     */
    public function getSubtotalBusiness()
    {
        return $this->subtotalBusiness;
    }

    /**
     * Set subtotalOwn
     *
     * @param float $subtotalOwn
     *
     * @return AppBalanceOutcome
     */
    public function setSubtotalOwn($subtotalOwn)
    {
        $this->subtotalOwn = $subtotalOwn;

        return $this;
    }

    /**
     * Get subtotalOwn
     *
     * @return float
     */
    public function getSubtotalOwn()
    {
        return $this->subtotalOwn;
    }

    /**
     * Set subtotal
     *
     * @param float $subtotal
     *
     * @return AppBalanceOutcome
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * Get subtotal
     *
     * @return float
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set totalOut
     *
     * @param float $totalOut
     *
     * @return AppBalanceOutcome
     */
    public function setTotalOut($totalOut)
    {
        $this->totalOut = $totalOut;

        return $this;
    }

    /**
     * Get totalOut
     *
     * @return float
     */
    public function getTotalOut()
    {
        return $this->totalOut;
    }

    /**
     * Set totalPending
     *
     * @param float $totalPending
     *
     * @return AppBalanceOutcome
     */
    public function setTotalPending($totalPending)
    {
        $this->totalPending = $totalPending;

        return $this;
    }

    /**
     * Get totalPending
     *
     * @return float
     */
    public function getTotalPending()
    {
        return $this->totalPending;
    }

    /**
     * Set isPaid
     *
     * @param integer $isPaid
     *
     * @return AppBalanceOutcome
     */
    public function setIsPaid($isPaid)
    {
        $this->isPaid = $isPaid;

        return $this;
    }

    /**
     * Get isPaid
     *
     * @return integer
     */
    public function getIsPaid()
    {
        return $this->isPaid;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return AppBalanceOutcome
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

