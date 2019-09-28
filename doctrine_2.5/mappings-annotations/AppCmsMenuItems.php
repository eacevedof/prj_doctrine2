<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppCmsMenuItems
 *
 * @ORM\Table(name="app_cms_menu_items")
 * @ORM\Entity
 */
class AppCmsMenuItems
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
    private $insertPlatform;

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
     * @ORM\Column(name="slug", type="text", nullable=true)
     */
    private $slug;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_menu", type="integer", nullable=true)
     */
    private $idMenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_by", type="integer", nullable=false)
     */
    private $orderBy = '100';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=true)
     */
    private $idParent;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_active", type="integer", nullable=true)
     */
    private $isActive = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_published", type="integer", nullable=true)
     */
    private $isPublished;

    /**
     * @var string
     *
     * @ORM\Column(name="url_permalink", type="text", nullable=true)
     */
    private $urlPermalink;

    /**
     * @var string
     *
     * @ORM\Column(name="url_nopermalink", type="text", nullable=true)
     */
    private $urlNopermalink;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_urlblank", type="integer", nullable=true)
     */
    private $isUrlblank;

    /**
     * @var string
     *
     * @ORM\Column(name="html_class", type="text", nullable=true)
     */
    private $htmlClass;

    /**
     * @var string
     *
     * @ORM\Column(name="html_extras", type="text", nullable=true)
     */
    private $htmlExtras;


}

