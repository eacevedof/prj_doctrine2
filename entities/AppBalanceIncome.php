<?php



/**
 * AppBalanceIncome
 */
class AppBalanceIncome
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
    private $idClosedBy;

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
    private $subtotalOpen;

    /**
     * @var float
     */
    private $subtotalCash;

    /**
     * @var float
     */
    private $subtotalCreditcard;

    /**
     * @var float
     */
    private $subtotalCheck;

    /**
     * @var float
     */
    private $subtotal;

    /**
     * @var float
     */
    private $subtotalExclude;

    /**
     * @var float
     */
    private $totalIn;

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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * Set idClosedBy
     *
     * @param integer $idClosedBy
     *
     * @return AppBalanceIncome
     */
    public function setIdClosedBy($idClosedBy)
    {
        $this->idClosedBy = $idClosedBy;

        return $this;
    }

    /**
     * Get idClosedBy
     *
     * @return integer
     */
    public function getIdClosedBy()
    {
        return $this->idClosedBy;
    }

    /**
     * Set idType
     *
     * @param integer $idType
     *
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * @return AppBalanceIncome
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
     * Set subtotalOpen
     *
     * @param float $subtotalOpen
     *
     * @return AppBalanceIncome
     */
    public function setSubtotalOpen($subtotalOpen)
    {
        $this->subtotalOpen = $subtotalOpen;

        return $this;
    }

    /**
     * Get subtotalOpen
     *
     * @return float
     */
    public function getSubtotalOpen()
    {
        return $this->subtotalOpen;
    }

    /**
     * Set subtotalCash
     *
     * @param float $subtotalCash
     *
     * @return AppBalanceIncome
     */
    public function setSubtotalCash($subtotalCash)
    {
        $this->subtotalCash = $subtotalCash;

        return $this;
    }

    /**
     * Get subtotalCash
     *
     * @return float
     */
    public function getSubtotalCash()
    {
        return $this->subtotalCash;
    }

    /**
     * Set subtotalCreditcard
     *
     * @param float $subtotalCreditcard
     *
     * @return AppBalanceIncome
     */
    public function setSubtotalCreditcard($subtotalCreditcard)
    {
        $this->subtotalCreditcard = $subtotalCreditcard;

        return $this;
    }

    /**
     * Get subtotalCreditcard
     *
     * @return float
     */
    public function getSubtotalCreditcard()
    {
        return $this->subtotalCreditcard;
    }

    /**
     * Set subtotalCheck
     *
     * @param float $subtotalCheck
     *
     * @return AppBalanceIncome
     */
    public function setSubtotalCheck($subtotalCheck)
    {
        $this->subtotalCheck = $subtotalCheck;

        return $this;
    }

    /**
     * Get subtotalCheck
     *
     * @return float
     */
    public function getSubtotalCheck()
    {
        return $this->subtotalCheck;
    }

    /**
     * Set subtotal
     *
     * @param float $subtotal
     *
     * @return AppBalanceIncome
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
     * Set subtotalExclude
     *
     * @param float $subtotalExclude
     *
     * @return AppBalanceIncome
     */
    public function setSubtotalExclude($subtotalExclude)
    {
        $this->subtotalExclude = $subtotalExclude;

        return $this;
    }

    /**
     * Get subtotalExclude
     *
     * @return float
     */
    public function getSubtotalExclude()
    {
        return $this->subtotalExclude;
    }

    /**
     * Set totalIn
     *
     * @param float $totalIn
     *
     * @return AppBalanceIncome
     */
    public function setTotalIn($totalIn)
    {
        $this->totalIn = $totalIn;

        return $this;
    }

    /**
     * Get totalIn
     *
     * @return float
     */
    public function getTotalIn()
    {
        return $this->totalIn;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return AppBalanceIncome
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

