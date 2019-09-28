<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppProjectTasks
 *
 * @ORM\Table(name="app_project_tasks")
 * @ORM\Entity
 */
class AppProjectTasks
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
     * @ORM\Column(name="date_open", type="text", nullable=true)
     */
    private $dateOpen;

    /**
     * @var string
     *
     * @ORM\Column(name="date_close", type="text", nullable=true)
     */
    private $dateClose;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_project", type="integer", nullable=true)
     */
    private $idProject;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_to", type="integer", nullable=true)
     */
    private $idUserTo;

    /**
     * @var string
     *
     * @ORM\Column(name="notes_detail", type="text", nullable=true)
     */
    private $notesDetail;

    /**
     * @var string
     *
     * @ORM\Column(name="notes_to", type="text", nullable=true)
     */
    private $notesTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_by", type="integer", nullable=true)
     */
    private $idUserBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_priority", type="integer", nullable=true)
     */
    private $idTypePriority;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_status", type="integer", nullable=true)
     */
    private $idTypeStatus;

    /**
     * @var float
     *
     * @ORM\Column(name="hours", type="float", precision=10, scale=0, nullable=true)
     */
    private $hours;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_percent", type="integer", nullable=true)
     */
    private $idTypePercent;


}

