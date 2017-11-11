<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppActivity
 *
 * @ORM\Table(name="app_activity")
 * @ORM\Entity
 */
class AppActivity
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
     * @ORM\Column(name="date_programmed", type="text", nullable=true)
     */
    private $dateProgrammed;

    /**
     * @var string
     *
     * @ORM\Column(name="hour_programmed_from", type="text", nullable=true)
     */
    private $hourProgrammedFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="hour_programmed_to", type="text", nullable=true)
     */
    private $hourProgrammedTo;

    /**
     * @var string
     *
     * @ORM\Column(name="date_accomplished", type="text", nullable=true)
     */
    private $dateAccomplished;

    /**
     * @var string
     *
     * @ORM\Column(name="hour_accomplished_from", type="text", nullable=true)
     */
    private $hourAccomplishedFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="hour_accomplished_to", type="text", nullable=true)
     */
    private $hourAccomplishedTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_costumer", type="integer", nullable=true)
     */
    private $idCostumer;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_seller", type="integer", nullable=true)
     */
    private $idSeller;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_contact", type="integer", nullable=true)
     */
    private $idContact;


}

