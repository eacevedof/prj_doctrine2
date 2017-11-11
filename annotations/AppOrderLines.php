<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppOrderLines
 *
 * @ORM\Table(name="app_order_lines")
 * @ORM\Entity
 */
class AppOrderLines
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
     * @var integer
     *
     * @ORM\Column(name="line", type="integer", nullable=true)
     */
    private $line;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_order_head", type="integer", nullable=true)
     */
    private $idOrderHead;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_assortment", type="integer", nullable=true)
     */
    private $idAssortment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_product", type="integer", nullable=true)
     */
    private $idProduct;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_bonus", type="integer", nullable=true)
     */
    private $idBonus;

    /**
     * @var string
     *
     * @ORM\Column(name="product", type="text", nullable=true)
     */
    private $product;

    /**
     * @var float
     *
     * @ORM\Column(name="units", type="float", precision=10, scale=0, nullable=true)
     */
    private $units;

    /**
     * @var float
     *
     * @ORM\Column(name="unit_price", type="float", precision=10, scale=0, nullable=true)
     */
    private $unitPrice = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=true)
     */
    private $amount = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="discount", type="float", precision=10, scale=0, nullable=true)
     */
    private $discount = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="discount_amount", type="float", precision=10, scale=0, nullable=true)
     */
    private $discountAmount = '0.000';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_discount", type="integer", nullable=true)
     */
    private $idTypeDiscount;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotal", type="float", precision=10, scale=0, nullable=true)
     */
    private $subtotal = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="is_free", type="text", nullable=true)
     */
    private $isFree;


}

