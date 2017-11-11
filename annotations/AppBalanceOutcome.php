<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppBalanceOutcome
 *
 * @ORM\Table(name="app_balance_outcome")
 * @ORM\Entity
 */
class AppBalanceOutcome
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
     * @ORM\Column(name="id_provider", type="integer", nullable=true)
     */
    private $idProvider;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type", type="integer", nullable=true)
     */
    private $idType;

    /**
     * @var string
     *
     * @ORM\Column(name="receipt_nr", type="text", nullable=true)
     */
    private $receiptNr;

    /**
     * @var string
     *
     * @ORM\Column(name="receipt_date", type="text", nullable=true)
     */
    private $receiptDate;

    /**
     * @var string
     *
     * @ORM\Column(name="operation_date", type="text", nullable=true)
     */
    private $operationDate;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotal_business", type="float", precision=10, scale=0, nullable=true)
     */
    private $subtotalBusiness;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotal_own", type="float", precision=10, scale=0, nullable=true)
     */
    private $subtotalOwn;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotal", type="float", precision=10, scale=0, nullable=true)
     */
    private $subtotal;

    /**
     * @var float
     *
     * @ORM\Column(name="total_out", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalOut;

    /**
     * @var float
     *
     * @ORM\Column(name="total_pending", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalPending;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_paid", type="integer", nullable=true)
     */
    private $isPaid;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;


}

