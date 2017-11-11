<?php



/**
 * AppAssortment
 */
class AppAssortment
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
    private $idType;

    /**
     * @var integer
     */
    private $idProductBrand;

    /**
     * @var integer
     */
    private $idProductFamily;

    /**
     * @var integer
     */
    private $idProductSubfamily;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var float
     */
    private $priceCost;

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
    private $priceTax;

    /**
     * @var float
     */
    private $priceRegular;

    /**
     * @var float
     */
    private $priceWholesale;

    /**
     * @var float
     */
    private $priceCustom;

    /**
     * @var float
     */
    private $priceOld;

    /**
     * @var integer
     */
    private $stock;

    /**
     * @var float
     */
    private $bonusPoints;

    /**
     * @var string
     */
    private $tagGroup;

    /**
     * @var string
     */
    private $observation;


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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * @return AppAssortment
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
     * Set idType
     *
     * @param integer $idType
     *
     * @return AppAssortment
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
     * Set idProductBrand
     *
     * @param integer $idProductBrand
     *
     * @return AppAssortment
     */
    public function setIdProductBrand($idProductBrand)
    {
        $this->idProductBrand = $idProductBrand;

        return $this;
    }

    /**
     * Get idProductBrand
     *
     * @return integer
     */
    public function getIdProductBrand()
    {
        return $this->idProductBrand;
    }

    /**
     * Set idProductFamily
     *
     * @param integer $idProductFamily
     *
     * @return AppAssortment
     */
    public function setIdProductFamily($idProductFamily)
    {
        $this->idProductFamily = $idProductFamily;

        return $this;
    }

    /**
     * Get idProductFamily
     *
     * @return integer
     */
    public function getIdProductFamily()
    {
        return $this->idProductFamily;
    }

    /**
     * Set idProductSubfamily
     *
     * @param integer $idProductSubfamily
     *
     * @return AppAssortment
     */
    public function setIdProductSubfamily($idProductSubfamily)
    {
        $this->idProductSubfamily = $idProductSubfamily;

        return $this;
    }

    /**
     * Get idProductSubfamily
     *
     * @return integer
     */
    public function getIdProductSubfamily()
    {
        return $this->idProductSubfamily;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return AppAssortment
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
     * Set priceCost
     *
     * @param float $priceCost
     *
     * @return AppAssortment
     */
    public function setPriceCost($priceCost)
    {
        $this->priceCost = $priceCost;

        return $this;
    }

    /**
     * Get priceCost
     *
     * @return float
     */
    public function getPriceCost()
    {
        return $this->priceCost;
    }

    /**
     * Set tax
     *
     * @param float $tax
     *
     * @return AppAssortment
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
     * @return AppAssortment
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
     * Set priceTax
     *
     * @param float $priceTax
     *
     * @return AppAssortment
     */
    public function setPriceTax($priceTax)
    {
        $this->priceTax = $priceTax;

        return $this;
    }

    /**
     * Get priceTax
     *
     * @return float
     */
    public function getPriceTax()
    {
        return $this->priceTax;
    }

    /**
     * Set priceRegular
     *
     * @param float $priceRegular
     *
     * @return AppAssortment
     */
    public function setPriceRegular($priceRegular)
    {
        $this->priceRegular = $priceRegular;

        return $this;
    }

    /**
     * Get priceRegular
     *
     * @return float
     */
    public function getPriceRegular()
    {
        return $this->priceRegular;
    }

    /**
     * Set priceWholesale
     *
     * @param float $priceWholesale
     *
     * @return AppAssortment
     */
    public function setPriceWholesale($priceWholesale)
    {
        $this->priceWholesale = $priceWholesale;

        return $this;
    }

    /**
     * Get priceWholesale
     *
     * @return float
     */
    public function getPriceWholesale()
    {
        return $this->priceWholesale;
    }

    /**
     * Set priceCustom
     *
     * @param float $priceCustom
     *
     * @return AppAssortment
     */
    public function setPriceCustom($priceCustom)
    {
        $this->priceCustom = $priceCustom;

        return $this;
    }

    /**
     * Get priceCustom
     *
     * @return float
     */
    public function getPriceCustom()
    {
        return $this->priceCustom;
    }

    /**
     * Set priceOld
     *
     * @param float $priceOld
     *
     * @return AppAssortment
     */
    public function setPriceOld($priceOld)
    {
        $this->priceOld = $priceOld;

        return $this;
    }

    /**
     * Get priceOld
     *
     * @return float
     */
    public function getPriceOld()
    {
        return $this->priceOld;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return AppAssortment
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set bonusPoints
     *
     * @param float $bonusPoints
     *
     * @return AppAssortment
     */
    public function setBonusPoints($bonusPoints)
    {
        $this->bonusPoints = $bonusPoints;

        return $this;
    }

    /**
     * Get bonusPoints
     *
     * @return float
     */
    public function getBonusPoints()
    {
        return $this->bonusPoints;
    }

    /**
     * Set tagGroup
     *
     * @param string $tagGroup
     *
     * @return AppAssortment
     */
    public function setTagGroup($tagGroup)
    {
        $this->tagGroup = $tagGroup;

        return $this;
    }

    /**
     * Get tagGroup
     *
     * @return string
     */
    public function getTagGroup()
    {
        return $this->tagGroup;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return AppAssortment
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }
}

