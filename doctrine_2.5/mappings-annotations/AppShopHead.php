<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppShopHead
 *
 * @ORM\Table(name="app_shop_head")
 * @ORM\Entity
 */
class AppShopHead
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
     * @var string
     *
     * @ORM\Column(name="date", type="text", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="hour", type="text", nullable=true)
     */
    private $hour;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_seller", type="integer", nullable=true)
     */
    private $idSeller = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=true)
     */
    private $idCustomer;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type", type="integer", nullable=true)
     */
    private $idType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_validate", type="integer", nullable=true)
     */
    private $idTypeValidate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_payment", type="integer", nullable=true)
     */
    private $idTypePayment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_currency", type="integer", nullable=true)
     */
    private $idTypeCurrency;

    /**
     * @var float
     *
     * @ORM\Column(name="lines_subtotal", type="float", precision=10, scale=0, nullable=true)
     */
    private $linesSubtotal = '0.000';

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
     * @var float
     *
     * @ORM\Column(name="subtotal", type="float", precision=10, scale=0, nullable=true)
     */
    private $subtotal = '0.000';

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
     * @ORM\Column(name="shipping_cost", type="float", precision=10, scale=0, nullable=true)
     */
    private $shippingCost = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=true)
     */
    private $total = '0.000';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_address_invoice", type="integer", nullable=true)
     */
    private $idAddressInvoice;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_address_delivery", type="integer", nullable=true)
     */
    private $idAddressDelivery;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_address", type="text", nullable=true)
     */
    private $invoiceAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_address", type="text", nullable=true)
     */
    private $deliveryAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_date", type="text", nullable=true)
     */
    private $deliveryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_hour", type="text", nullable=true)
     */
    private $deliveryHour;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_delivery_user", type="integer", nullable=true)
     */
    private $idDeliveryUser;

    /**
     * @var string
     *
     * @ORM\Column(name="is_payed", type="text", nullable=true)
     */
    private $isPayed;

    /**
     * @var string
     *
     * @ORM\Column(name="visit_hour", type="text", nullable=true)
     */
    private $visitHour;

    /**
     * @var string
     *
     * @ORM\Column(name="time_taking_start", type="text", nullable=true)
     */
    private $timeTakingStart;

    /**
     * @var string
     *
     * @ORM\Column(name="time_taking_end", type="text", nullable=true)
     */
    private $timeTakingEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="transac_code", type="text", nullable=true)
     */
    private $transacCode;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;


}

