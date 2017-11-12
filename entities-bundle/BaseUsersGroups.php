<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * BaseUsersGroups
 *
 * @ORM\Table(name="base_users_groups")
 * @ORM\Entity(repositoryClass="AppBundle\Entities\BaseUsersGroups")
 */
class BaseUsersGroups
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
     * @ORM\Column(name="processflag", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $processflag;

    /**
     * @var string
     *
     * @ORM\Column(name="insert_platform", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $insertPlatform;

    /**
     * @var string
     *
     * @ORM\Column(name="insert_user", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $insertUser;

    /**
     * @var string
     *
     * @ORM\Column(name="insert_date", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $insertDate;

    /**
     * @var string
     *
     * @ORM\Column(name="update_platform", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $updatePlatform;

    /**
     * @var string
     *
     * @ORM\Column(name="update_user", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $updateUser;

    /**
     * @var string
     *
     * @ORM\Column(name="update_date", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $updateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="delete_platform", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $deletePlatform;

    /**
     * @var string
     *
     * @ORM\Column(name="delete_user", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $deleteUser;

    /**
     * @var string
     *
     * @ORM\Column(name="delete_date", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $deleteDate;

    /**
     * @var string
     *
     * @ORM\Column(name="cru_csvnote", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $cruCsvnote;

    /**
     * @var string
     *
     * @ORM\Column(name="is_erpsent", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isErpsent;

    /**
     * @var string
     *
     * @ORM\Column(name="is_enabled", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isEnabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="i", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $i;

    /**
     * @var string
     *
     * @ORM\Column(name="code_erp", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $codeErp;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_group", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $idUserGroup;


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
     * @return BaseUsersGroups
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
     * @return BaseUsersGroups
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
     * @return BaseUsersGroups
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
     * @return BaseUsersGroups
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
     * @return BaseUsersGroups
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
     * @return BaseUsersGroups
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
     * @return BaseUsersGroups
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
     * Set deletePlatform
     *
     * @param string $deletePlatform
     *
     * @return BaseUsersGroups
     */
    public function setDeletePlatform($deletePlatform)
    {
        $this->deletePlatform = $deletePlatform;

        return $this;
    }

    /**
     * Get deletePlatform
     *
     * @return string
     */
    public function getDeletePlatform()
    {
        return $this->deletePlatform;
    }

    /**
     * Set deleteUser
     *
     * @param string $deleteUser
     *
     * @return BaseUsersGroups
     */
    public function setDeleteUser($deleteUser)
    {
        $this->deleteUser = $deleteUser;

        return $this;
    }

    /**
     * Get deleteUser
     *
     * @return string
     */
    public function getDeleteUser()
    {
        return $this->deleteUser;
    }

    /**
     * Set deleteDate
     *
     * @param string $deleteDate
     *
     * @return BaseUsersGroups
     */
    public function setDeleteDate($deleteDate)
    {
        $this->deleteDate = $deleteDate;

        return $this;
    }

    /**
     * Get deleteDate
     *
     * @return string
     */
    public function getDeleteDate()
    {
        return $this->deleteDate;
    }

    /**
     * Set cruCsvnote
     *
     * @param string $cruCsvnote
     *
     * @return BaseUsersGroups
     */
    public function setCruCsvnote($cruCsvnote)
    {
        $this->cruCsvnote = $cruCsvnote;

        return $this;
    }

    /**
     * Get cruCsvnote
     *
     * @return string
     */
    public function getCruCsvnote()
    {
        return $this->cruCsvnote;
    }

    /**
     * Set isErpsent
     *
     * @param string $isErpsent
     *
     * @return BaseUsersGroups
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
     * @return BaseUsersGroups
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
     * @return BaseUsersGroups
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
     * @return BaseUsersGroups
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
     * @return BaseUsersGroups
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
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return BaseUsersGroups
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idUserGroup
     *
     * @param integer $idUserGroup
     *
     * @return BaseUsersGroups
     */
    public function setIdUserGroup($idUserGroup)
    {
        $this->idUserGroup = $idUserGroup;

        return $this;
    }

    /**
     * Get idUserGroup
     *
     * @return integer
     */
    public function getIdUserGroup()
    {
        return $this->idUserGroup;
    }
}

