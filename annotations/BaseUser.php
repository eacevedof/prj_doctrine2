<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * BaseUser
 *
 * @ORM\Table(name="base_user")
 * @ORM\Entity
 */
class BaseUser
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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="text", nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="text", nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="bo_login", type="text", nullable=true)
     */
    private $boLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="bo_password", type="text", nullable=true)
     */
    private $boPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="text", nullable=true)
     */
    private $language;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_language", type="integer", nullable=true)
     */
    private $idLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="path_picture", type="text", nullable=true)
     */
    private $pathPicture;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_profile", type="integer", nullable=true)
     */
    private $idProfile;


}

