<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppAssortment
 *
 * @ORM\Table(name="app_assortment")
 * @ORM\Entity
 */
class AppAssortment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="processflag", type="text", nullable=true)
     */
    private $processflag;

    /**
     * @var string
     *
     * @ORM\Column(name="insert_platform", type="text", nullable=true)
     */
    private $insertPlatform = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="insert_user", type="text", nullable=true)
     */
    private $insertUser;

    /**
     * @var string
     *
     * @ORM\Column(name="insert_date", type="text", nullable=true)
     */
    private $insertDate;

    /**
     * @var string
     *
     * @ORM\Column(name="update_platform", type="text", nullable=true)
     */
    private $updatePlatform;

    /**
     * @var string
     *
     * @ORM\Column(name="update_user", type="text", nullable=true)
     */
    private $updateUser;

    /**
     * @var string
     *
     * @ORM\Column(name="update_date", type="text", nullable=true)
     */
    private $updateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="delete_platform", type="text", nullable=true)
     */
    private $deletePlatform;

    /**
     * @var string
     *
     * @ORM\Column(name="delete_user", type="text", nullable=true)
     */
    private $deleteUser;

    /**
     * @var string
     *
     * @ORM\Column(name="delete_date", type="text", nullable=true)
     */
    private $deleteDate;

    /**
     * @var string
     *
     * @ORM\Column(name="cru_csvnote", type="text", nullable=true)
     */
    private $cruCsvnote;

    /**
     * @var string
     *
     * @ORM\Column(name="is_erpsent", type="text", nullable=true)
     */
    private $isErpsent;

    /**
     * @var string
     *
     * @ORM\Column(name="is_enabled", type="text", nullable=true)
     */
    private $isEnabled = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="i", type="integer", nullable=true)
     */
    private $i;

    /**
     * @var string
     *
     * @ORM\Column(name="code_erp", type="text", nullable=true)
     */
    private $codeErp;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type", type="integer", nullable=true)
     */
    private $idType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_product_brand", type="integer", nullable=true)
     */
    private $idProductBrand = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_product_family", type="integer", nullable=true)
     */
    private $idProductFamily = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_product_subfamily", type="integer", nullable=true)
     */
    private $idProductSubfamily = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="text", nullable=true)
     */
    private $slug;

    /**
     * @var float
     *
     * @ORM\Column(name="price_cost", type="float", precision=10, scale=0, nullable=true)
     */
    private $priceCost = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="tax", type="float", precision=10, scale=0, nullable=true)
     */
    private $tax = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="tax_amount", type="float", precision=10, scale=0, nullable=true)
     */
    private $taxAmount = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="price_tax", type="float", precision=10, scale=0, nullable=true)
     */
    private $priceTax = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="price_regular", type="float", precision=10, scale=0, nullable=true)
     */
    private $priceRegular = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="price_wholesale", type="float", precision=10, scale=0, nullable=true)
     */
    private $priceWholesale = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="price_custom", type="float", precision=10, scale=0, nullable=true)
     */
    private $priceCustom = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="price_old", type="float", precision=10, scale=0, nullable=true)
     */
    private $priceOld = '0.000';

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer", nullable=true)
     */
    private $stock;

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_points", type="float", precision=10, scale=0, nullable=true)
     */
    private $bonusPoints = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="tag_group", type="text", nullable=true)
     */
    private $tagGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="text", nullable=true)
     */
    private $observation;


}

