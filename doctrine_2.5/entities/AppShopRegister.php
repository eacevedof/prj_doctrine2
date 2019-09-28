<?php



/**
 * AppShopRegister
 */
class AppShopRegister
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $processflag;

    /**
     * @var string
     */
    private $insertPlatform;

    /**
     * @var string
     */
    private $insertUser;

    /**
     * @var string
     */
    private $insertDate;

    /**
     * @var string
     */
    private $updatePlatform;

    /**
     * @var string
     */
    private $updateUser;

    /**
     * @var string
     */
    private $updateDate;

    /**
     * @var string
     */
    private $isErpsent;

    /**
     * @var string
     */
    private $isEnabled;

    /**
     * @var integer
     */
    private $i;

    /**
     * @var string
     */
    private $codeErp;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $remoteIp;

    /**
     * @var string
     */
    private $tokenactivate;

    /**
     * @var integer
     */
    private $idTypeProcess;

    /**
     * @var integer
     */
    private $idTypeGender;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName1;

    /**
     * @var string
     */
    private $lastName2;

    /**
     * @var string
     */
    private $birthdate;

    /**
     * @var string
     */
    private $howMeetus;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $isRobinsonEmail;

    /**
     * @var string
     */
    private $isPolicy;


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
     * Set processflag
     *
     * @param string $processflag
     *
     * @return AppShopRegister
     */
    public function setProcessflag($processflag)
    {
        $this->processflag = $processflag;

        return $this;
    }

    /**
     * Get processflag
     *
     * @return string
     */
    public function getProcessflag()
    {
        return $this->processflag;
    }

    /**
     * Set insertPlatform
     *
     * @param string $insertPlatform
     *
     * @return AppShopRegister
     */
    public function setInsertPlatform($insertPlatform)
    {
        $this->insertPlatform = $insertPlatform;

        return $this;
    }

    /**
     * Get insertPlatform
     *
     * @return string
     */
    public function getInsertPlatform()
    {
        return $this->insertPlatform;
    }

    /**
     * Set insertUser
     *
     * @param string $insertUser
     *
     * @return AppShopRegister
     */
    public function setInsertUser($insertUser)
    {
        $this->insertUser = $insertUser;

        return $this;
    }

    /**
     * Get insertUser
     *
     * @return string
     */
    public function getInsertUser()
    {
        return $this->insertUser;
    }

    /**
     * Set insertDate
     *
     * @param string $insertDate
     *
     * @return AppShopRegister
     */
    public function setInsertDate($insertDate)
    {
        $this->insertDate = $insertDate;

        return $this;
    }

    /**
     * Get insertDate
     *
     * @return string
     */
    public function getInsertDate()
    {
        return $this->insertDate;
    }

    /**
     * Set updatePlatform
     *
     * @param string $updatePlatform
     *
     * @return AppShopRegister
     */
    public function setUpdatePlatform($updatePlatform)
    {
        $this->updatePlatform = $updatePlatform;

        return $this;
    }

    /**
     * Get updatePlatform
     *
     * @return string
     */
    public function getUpdatePlatform()
    {
        return $this->updatePlatform;
    }

    /**
     * Set updateUser
     *
     * @param string $updateUser
     *
     * @return AppShopRegister
     */
    public function setUpdateUser($updateUser)
    {
        $this->updateUser = $updateUser;

        return $this;
    }

    /**
     * Get updateUser
     *
     * @return string
     */
    public function getUpdateUser()
    {
        return $this->updateUser;
    }

    /**
     * Set updateDate
     *
     * @param string $updateDate
     *
     * @return AppShopRegister
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return string
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set isErpsent
     *
     * @param string $isErpsent
     *
     * @return AppShopRegister
     */
    public function setIsErpsent($isErpsent)
    {
        $this->isErpsent = $isErpsent;

        return $this;
    }

    /**
     * Get isErpsent
     *
     * @return string
     */
    public function getIsErpsent()
    {
        return $this->isErpsent;
    }

    /**
     * Set isEnabled
     *
     * @param string $isEnabled
     *
     * @return AppShopRegister
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return string
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set i
     *
     * @param integer $i
     *
     * @return AppShopRegister
     */
    public function setI($i)
    {
        $this->i = $i;

        return $this;
    }

    /**
     * Get i
     *
     * @return integer
     */
    public function getI()
    {
        return $this->i;
    }

    /**
     * Set codeErp
     *
     * @param string $codeErp
     *
     * @return AppShopRegister
     */
    public function setCodeErp($codeErp)
    {
        $this->codeErp = $codeErp;

        return $this;
    }

    /**
     * Get codeErp
     *
     * @return string
     */
    public function getCodeErp()
    {
        return $this->codeErp;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return AppShopRegister
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
     * Set remoteIp
     *
     * @param string $remoteIp
     *
     * @return AppShopRegister
     */
    public function setRemoteIp($remoteIp)
    {
        $this->remoteIp = $remoteIp;

        return $this;
    }

    /**
     * Get remoteIp
     *
     * @return string
     */
    public function getRemoteIp()
    {
        return $this->remoteIp;
    }

    /**
     * Set tokenactivate
     *
     * @param string $tokenactivate
     *
     * @return AppShopRegister
     */
    public function setTokenactivate($tokenactivate)
    {
        $this->tokenactivate = $tokenactivate;

        return $this;
    }

    /**
     * Get tokenactivate
     *
     * @return string
     */
    public function getTokenactivate()
    {
        return $this->tokenactivate;
    }

    /**
     * Set idTypeProcess
     *
     * @param integer $idTypeProcess
     *
     * @return AppShopRegister
     */
    public function setIdTypeProcess($idTypeProcess)
    {
        $this->idTypeProcess = $idTypeProcess;

        return $this;
    }

    /**
     * Get idTypeProcess
     *
     * @return integer
     */
    public function getIdTypeProcess()
    {
        return $this->idTypeProcess;
    }

    /**
     * Set idTypeGender
     *
     * @param integer $idTypeGender
     *
     * @return AppShopRegister
     */
    public function setIdTypeGender($idTypeGender)
    {
        $this->idTypeGender = $idTypeGender;

        return $this;
    }

    /**
     * Get idTypeGender
     *
     * @return integer
     */
    public function getIdTypeGender()
    {
        return $this->idTypeGender;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return AppShopRegister
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
     * Set lastName1
     *
     * @param string $lastName1
     *
     * @return AppShopRegister
     */
    public function setLastName1($lastName1)
    {
        $this->lastName1 = $lastName1;

        return $this;
    }

    /**
     * Get lastName1
     *
     * @return string
     */
    public function getLastName1()
    {
        return $this->lastName1;
    }

    /**
     * Set lastName2
     *
     * @param string $lastName2
     *
     * @return AppShopRegister
     */
    public function setLastName2($lastName2)
    {
        $this->lastName2 = $lastName2;

        return $this;
    }

    /**
     * Get lastName2
     *
     * @return string
     */
    public function getLastName2()
    {
        return $this->lastName2;
    }

    /**
     * Set birthdate
     *
     * @param string $birthdate
     *
     * @return AppShopRegister
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return string
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set howMeetus
     *
     * @param string $howMeetus
     *
     * @return AppShopRegister
     */
    public function setHowMeetus($howMeetus)
    {
        $this->howMeetus = $howMeetus;

        return $this;
    }

    /**
     * Get howMeetus
     *
     * @return string
     */
    public function getHowMeetus()
    {
        return $this->howMeetus;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return AppShopRegister
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return AppShopRegister
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set isRobinsonEmail
     *
     * @param string $isRobinsonEmail
     *
     * @return AppShopRegister
     */
    public function setIsRobinsonEmail($isRobinsonEmail)
    {
        $this->isRobinsonEmail = $isRobinsonEmail;

        return $this;
    }

    /**
     * Get isRobinsonEmail
     *
     * @return string
     */
    public function getIsRobinsonEmail()
    {
        return $this->isRobinsonEmail;
    }

    /**
     * Set isPolicy
     *
     * @param string $isPolicy
     *
     * @return AppShopRegister
     */
    public function setIsPolicy($isPolicy)
    {
        $this->isPolicy = $isPolicy;

        return $this;
    }

    /**
     * Get isPolicy
     *
     * @return string
     */
    public function getIsPolicy()
    {
        return $this->isPolicy;
    }
}

