<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * BaseSecurityCsrf
 *
 * @ORM\Table(name="base_security_csrf")
 * @ORM\Entity
 */
class BaseSecurityCsrf
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
     * @ORM\Column(name="remote_ip", type="text", nullable=true)
     */
    private $remoteIp;

    /**
     * @var string
     *
     * @ORM\Column(name="sessionid", type="text", nullable=true)
     */
    private $sessionid = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="sessionck", type="text", nullable=true)
     */
    private $sessionck;

    /**
     * @var string
     *
     * @ORM\Column(name="csrf", type="text", nullable=true)
     */
    private $csrf;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="req_get", type="text", nullable=true)
     */
    private $reqGet;

    /**
     * @var string
     *
     * @ORM\Column(name="req_post", type="text", nullable=true)
     */
    private $reqPost;


}

