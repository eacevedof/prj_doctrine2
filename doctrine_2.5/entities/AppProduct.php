<?php



/**
 * AppProduct
 */
class AppProduct
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
    private $name;

    /**
     * @var integer
     */
    private $idTypeContainer;

    /**
     * @var integer
     */
    private $idTypeSize;

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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * Set idProductBrand
     *
     * @param integer $idProductBrand
     *
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * Set name
     *
     * @param string $name
     *
     * @return AppProduct
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set idTypeContainer
     *
     * @param integer $idTypeContainer
     *
     * @return AppProduct
     */
    public function setIdTypeContainer($idTypeContainer)
    {
        $this->idTypeContainer = $idTypeContainer;

        return $this;
    }

    /**
     * Get idTypeContainer
     *
     * @return integer
     */
    public function getIdTypeContainer()
    {
        return $this->idTypeContainer;
    }

    /**
     * Set idTypeSize
     *
     * @param integer $idTypeSize
     *
     * @return AppProduct
     */
    public function setIdTypeSize($idTypeSize)
    {
        $this->idTypeSize = $idTypeSize;

        return $this;
    }

    /**
     * Get idTypeSize
     *
     * @return integer
     */
    public function getIdTypeSize()
    {
        return $this->idTypeSize;
    }

    /**
     * Set priceCost
     *
     * @param float $priceCost
     *
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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
     * @return AppProduct
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

