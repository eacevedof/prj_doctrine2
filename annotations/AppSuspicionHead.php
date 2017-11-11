<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppSuspicionHead
 *
 * @ORM\Table(name="app_suspicion_head")
 * @ORM\Entity
 */
class AppSuspicionHead
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
     * @ORM\Column(name="id_transfer", type="integer", nullable=true)
     */
    private $idTransfer;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_isr", type="integer", nullable=false)
     */
    private $idIsr;

    /**
     * @var string
     *
     * @ORM\Column(name="path_lo", type="text", nullable=true)
     */
    private $pathLo;

    /**
     * @var string
     *
     * @ORM\Column(name="office_name", type="text", nullable=true)
     */
    private $officeName;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="text", nullable=true)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", nullable=true)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="user_creation", type="text", nullable=true)
     */
    private $userCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation", type="text", nullable=true)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="hour_creation", type="text", nullable=true)
     */
    private $hourCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="text", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="type_char", type="text", nullable=true)
     */
    private $typeChar;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="text", nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_cash", type="text", nullable=true)
     */
    private $amountCash;

    /**
     * @var string
     *
     * @ORM\Column(name="filial_name", type="text", nullable=true)
     */
    private $filialName;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;


}

