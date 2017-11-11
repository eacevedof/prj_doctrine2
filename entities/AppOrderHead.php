<?php



/**
 * AppOrderHead
 */
class AppOrderHead
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
    private $date;

    /**
     * @var string
     */
    private $hour;

    /**
     * @var integer
     */
    private $idSeller;

    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var integer
     */
    private $idType;

    /**
     * @var integer
     */
    private $idTypeValidate;

    /**
     * @var integer
     */
    private $idTypePayment;

    /**
     * @var integer
     */
    private $idTypeCurrency;

    /**
     * @var float
     */
    private $linesSubtotal;

    /**
     * @var float
     */
    private $discount;

    /**
     * @var float
     */
    private $discountAmount;

    /**
     * @var float
     */
    private $subtotal;

    /**
     * @var float
     */
    private $tax;

    /**
     * @var float
     */
    private $taxAmount;

    /**
     * @var float
     */
    private $shippingCost;

    /**
     * @var float
     */
    private $total;

    /**
     * @var integer
     */
    private $idAddressInvoice;

    /**
     * @var integer
     */
    private $idAddressDelivery;

    /**
     * @var string
     */
    private $invoiceAddress;

    /**
     * @var string
     */
    private $deliveryAddress;

    /**
     * @var string
     */
    private $deliveryDate;

    /**
     * @var string
     */
    private $deliveryHour;

    /**
     * @var integer
     */
    private $idDeliveryUser;

    /**
     * @var string
     */
    private $isPayed;

    /**
     * @var string
     */
    private $visitHour;

    /**
     * @var string
     */
    private $timeTakingStart;

    /**
     * @var string
     */
    private $timeTakingEnd;

    /**
     * @var string
     */
    private $transacCode;

    /**
     * @var string
     */
    private $notesUser;

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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * @return AppOrderHead
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
     * Set date
     *
     * @param string $date
     *
     * @return AppOrderHead
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set hour
     *
     * @param string $hour
     *
     * @return AppOrderHead
     */
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get hour
     *
     * @return string
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set idSeller
     *
     * @param integer $idSeller
     *
     * @return AppOrderHead
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
     * Set idCustomer
     *
     * @param integer $idCustomer
     *
     * @return AppOrderHead
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer
     *
     * @return integer
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Set idType
     *
     * @param integer $idType
     *
     * @return AppOrderHead
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
     * Set idTypeValidate
     *
     * @param integer $idTypeValidate
     *
     * @return AppOrderHead
     */
    public function setIdTypeValidate($idTypeValidate)
    {
        $this->idTypeValidate = $idTypeValidate;

        return $this;
    }

    /**
     * Get idTypeValidate
     *
     * @return integer
     */
    public function getIdTypeValidate()
    {
        return $this->idTypeValidate;
    }

    /**
     * Set idTypePayment
     *
     * @param integer $idTypePayment
     *
     * @return AppOrderHead
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
     * Set idTypeCurrency
     *
     * @param integer $idTypeCurrency
     *
     * @return AppOrderHead
     */
    public function setIdTypeCurrency($idTypeCurrency)
    {
        $this->idTypeCurrency = $idTypeCurrency;

        return $this;
    }

    /**
     * Get idTypeCurrency
     *
     * @return integer
     */
    public function getIdTypeCurrency()
    {
        return $this->idTypeCurrency;
    }

    /**
     * Set linesSubtotal
     *
     * @param float $linesSubtotal
     *
     * @return AppOrderHead
     */
    public function setLinesSubtotal($linesSubtotal)
    {
        $this->linesSubtotal = $linesSubtotal;

        return $this;
    }

    /**
     * Get linesSubtotal
     *
     * @return float
     */
    public function getLinesSubtotal()
    {
        return $this->linesSubtotal;
    }

    /**
     * Set discount
     *
     * @param float $discount
     *
     * @return AppOrderHead
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set discountAmount
     *
     * @param float $discountAmount
     *
     * @return AppOrderHead
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    /**
     * Get discountAmount
     *
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * Set subtotal
     *
     * @param float $subtotal
     *
     * @return AppOrderHead
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
     * Set tax
     *
     * @param float $tax
     *
     * @return AppOrderHead
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax
     *
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set taxAmount
     *
     * @param float $taxAmount
     *
     * @return AppOrderHead
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * Get taxAmount
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Set shippingCost
     *
     * @param float $shippingCost
     *
     * @return AppOrderHead
     */
    public function setShippingCost($shippingCost)
    {
        $this->shippingCost = $shippingCost;

        return $this;
    }

    /**
     * Get shippingCost
     *
     * @return float
     */
    public function getShippingCost()
    {
        return $this->shippingCost;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return AppOrderHead
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set idAddressInvoice
     *
     * @param integer $idAddressInvoice
     *
     * @return AppOrderHead
     */
    public function setIdAddressInvoice($idAddressInvoice)
    {
        $this->idAddressInvoice = $idAddressInvoice;

        return $this;
    }

    /**
     * Get idAddressInvoice
     *
     * @return integer
     */
    public function getIdAddressInvoice()
    {
        return $this->idAddressInvoice;
    }

    /**
     * Set idAddressDelivery
     *
     * @param integer $idAddressDelivery
     *
     * @return AppOrderHead
     */
    public function setIdAddressDelivery($idAddressDelivery)
    {
        $this->idAddressDelivery = $idAddressDelivery;

        return $this;
    }

    /**
     * Get idAddressDelivery
     *
     * @return integer
     */
    public function getIdAddressDelivery()
    {
        return $this->idAddressDelivery;
    }

    /**
     * Set invoiceAddress
     *
     * @param string $invoiceAddress
     *
     * @return AppOrderHead
     */
    public function setInvoiceAddress($invoiceAddress)
    {
        $this->invoiceAddress = $invoiceAddress;

        return $this;
    }

    /**
     * Get invoiceAddress
     *
     * @return string
     */
    public function getInvoiceAddress()
    {
        return $this->invoiceAddress;
    }

    /**
     * Set deliveryAddress
     *
     * @param string $deliveryAddress
     *
     * @return AppOrderHead
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * Get deliveryAddress
     *
     * @return string
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Set deliveryDate
     *
     * @param string $deliveryDate
     *
     * @return AppOrderHead
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set deliveryHour
     *
     * @param string $deliveryHour
     *
     * @return AppOrderHead
     */
    public function setDeliveryHour($deliveryHour)
    {
        $this->deliveryHour = $deliveryHour;

        return $this;
    }

    /**
     * Get deliveryHour
     *
     * @return string
     */
    public function getDeliveryHour()
    {
        return $this->deliveryHour;
    }

    /**
     * Set idDeliveryUser
     *
     * @param integer $idDeliveryUser
     *
     * @return AppOrderHead
     */
    public function setIdDeliveryUser($idDeliveryUser)
    {
        $this->idDeliveryUser = $idDeliveryUser;

        return $this;
    }

    /**
     * Get idDeliveryUser
     *
     * @return integer
     */
    public function getIdDeliveryUser()
    {
        return $this->idDeliveryUser;
    }

    /**
     * Set isPayed
     *
     * @param string $isPayed
     *
     * @return AppOrderHead
     */
    public function setIsPayed($isPayed)
    {
        $this->isPayed = $isPayed;

        return $this;
    }

    /**
     * Get isPayed
     *
     * @return string
     */
    public function getIsPayed()
    {
        return $this->isPayed;
    }

    /**
     * Set visitHour
     *
     * @param string $visitHour
     *
     * @return AppOrderHead
     */
    public function setVisitHour($visitHour)
    {
        $this->visitHour = $visitHour;

        return $this;
    }

    /**
     * Get visitHour
     *
     * @return string
     */
    public function getVisitHour()
    {
        return $this->visitHour;
    }

    /**
     * Set timeTakingStart
     *
     * @param string $timeTakingStart
     *
     * @return AppOrderHead
     */
    public function setTimeTakingStart($timeTakingStart)
    {
        $this->timeTakingStart = $timeTakingStart;

        return $this;
    }

    /**
     * Get timeTakingStart
     *
     * @return string
     */
    public function getTimeTakingStart()
    {
        return $this->timeTakingStart;
    }

    /**
     * Set timeTakingEnd
     *
     * @param string $timeTakingEnd
     *
     * @return AppOrderHead
     */
    public function setTimeTakingEnd($timeTakingEnd)
    {
        $this->timeTakingEnd = $timeTakingEnd;

        return $this;
    }

    /**
     * Get timeTakingEnd
     *
     * @return string
     */
    public function getTimeTakingEnd()
    {
        return $this->timeTakingEnd;
    }

    /**
     * Set transacCode
     *
     * @param string $transacCode
     *
     * @return AppOrderHead
     */
    public function setTransacCode($transacCode)
    {
        $this->transacCode = $transacCode;

        return $this;
    }

    /**
     * Get transacCode
     *
     * @return string
     */
    public function getTransacCode()
    {
        return $this->transacCode;
    }

    /**
     * Set notesUser
     *
     * @param string $notesUser
     *
     * @return AppOrderHead
     */
    public function setNotesUser($notesUser)
    {
        $this->notesUser = $notesUser;

        return $this;
    }

    /**
     * Get notesUser
     *
     * @return string
     */
    public function getNotesUser()
    {
        return $this->notesUser;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return AppOrderHead
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

