<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * BaseUsersPermissions
 *
 * @ORM\Table(name="base_users_permissions")
 * @ORM\Entity
 */
class BaseUsersPermissions
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
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_module", type="integer", nullable=true)
     */
    private $idModule;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_shortcut", type="integer", nullable=true)
     */
    private $isShortcut = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_select_menu", type="integer", nullable=true)
     */
    private $isSelectMenu = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_insert_menu", type="integer", nullable=true)
     */
    private $isInsertMenu = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_pick", type="integer", nullable=true)
     */
    private $isPick = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_select", type="integer", nullable=true)
     */
    private $isSelect = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_insert", type="integer", nullable=true)
     */
    private $isInsert = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_read", type="integer", nullable=true)
     */
    private $isRead = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_update", type="integer", nullable=true)
     */
    private $isUpdate = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_delete", type="integer", nullable=true)
     */
    private $isDelete = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_quarantine", type="integer", nullable=true)
     */
    private $isQuarantine = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_excelexport", type="integer", nullable=true)
     */
    private $isExcelexport = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_print", type="integer", nullable=true)
     */
    private $isPrint = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_foreign", type="integer", nullable=true)
     */
    private $isForeign = '1';


}

