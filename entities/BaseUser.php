<?php



/**
 * BaseUser
 */
class BaseUser
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $boLogin;

    /**
     * @var string
     */
    private $boPassword;

    /**
     * @var string
     */
    private $language;

    /**
     * @var integer
     */
    private $idLanguage;

    /**
     * @var string
     */
    private $pathPicture;

    /**
     * @var integer
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

