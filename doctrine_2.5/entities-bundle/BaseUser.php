<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * BaseUser
 *
 * @ORM\Table(name="base_user")
 * @ORM\Entity(repositoryClass="AppBundle\Entities\BaseUser")
 */
class BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="bo_login", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $boLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="bo_password", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $boPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $language;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_language", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $idLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="path_picture", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $pathPicture;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_profile", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $idProfile;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return BaseUser
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return BaseUser
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return BaseUser
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return BaseUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set boLogin
     *
     * @param string $boLogin
     *
     * @return BaseUser
     */
    public function setBoLogin($boLogin)
    {
        $this->boLogin = $boLogin;

        return $this;
    }

    /**
     * Get boLogin
     *
     * @return string
     */
    public function getBoLogin()
    {
        return $this->boLogin;
    }

    /**
     * Set boPassword
     *
     * @param string $boPassword
     *
     * @return BaseUser
     */
    public function setBoPassword($boPassword)
    {
        $this->boPassword = $boPassword;

        return $this;
    }

    /**
     * Get boPassword
     *
     * @return string
     */
    public function getBoPassword()
    {
        return $this->boPassword;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return BaseUser
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set idLanguage
     *
     * @param integer $idLanguage
     *
     * @return BaseUser
     */
    public function setIdLanguage($idLanguage)
    {
        $this->idLanguage = $idLanguage;

        return $this;
    }

    /**
     * Get idLanguage
     *
     * @return integer
     */
    public function getIdLanguage()
    {
        return $this->idLanguage;
    }

    /**
     * Set pathPicture
     *
     * @param string $pathPicture
     *
     * @return BaseUser
     */
    public function setPathPicture($pathPicture)
    {
        $this->pathPicture = $pathPicture;

        return $this;
    }

    /**
     * Get pathPicture
     *
     * @return string
     */
    public function getPathPicture()
    {
        return $this->pathPicture;
    }

    /**
     * Set idProfile
     *
     * @param integer $idProfile
     *
     * @return BaseUser
     */
    public function setIdProfile($idProfile)
    {
        $this->idProfile = $idProfile;

        return $this;
    }

    /**
     * Get idProfile
     *
     * @return integer
     */
    public function getIdProfile()
    {
        return $this->idProfile;
    }
}

