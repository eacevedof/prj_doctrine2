<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppShopRegister
 *
 * @ORM\Table(name="app_shop_register")
 * @ORM\Entity
 */
class AppShopRegister
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
    private $updatePlatform = '1';

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
     * @ORM\Column(name="remote_ip", type="text", nullable=true)
     */
    private $remoteIp;

    /**
     * @var string
     *
     * @ORM\Column(name="tokenactivate", type="text", nullable=true)
     */
    private $tokenactivate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_process", type="integer", nullable=true)
     */
    private $idTypeProcess;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_gender", type="integer", nullable=true)
     */
    private $idTypeGender;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="text", nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name_1", type="text", nullable=true)
     */
    private $lastName1;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name_2", type="text", nullable=true)
     */
    private $lastName2;

    /**
     * @var string
     *
     * @ORM\Column(name="birthdate", type="text", nullable=true)
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="how_meetus", type="text", nullable=true)
     */
    private $howMeetus;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="text", nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="text", nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="is_robinson_email", type="text", nullable=true)
     */
    private $isRobinsonEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="is_policy", type="text", nullable=true)
     */
    private $isPolicy;


}

