<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * BaseArrayLang
 *
 * @ORM\Table(name="base_array_lang")
 * @ORM\Entity(repositoryClass="AppBundle\Entities\BaseArrayLang")
 */
class BaseArrayLang
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
     * @var integer
     *
     * @ORM\Column(name="id_source", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $idSource;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_language", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $idLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_by", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $orderBy;


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
     * @return BaseArrayLang
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
     * @return BaseArrayLang
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
     * @return BaseArrayLang
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
     * @return BaseArrayLang
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
     * @return BaseArrayLang
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
     * @return BaseArrayLang
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
     * @return BaseArrayLang
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
     * @return BaseArrayLang
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
     * @return BaseArrayLang
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
     * @return BaseArrayLang
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
     * @return BaseArrayLang
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
     * @return BaseArrayLang
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
     * @return BaseArrayLang
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
     * @return BaseArrayLang
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
     * Set idSource
     *
     * @param integer $idSource
     *
     * @return BaseArrayLang
     */
    public function setIdSource($idSource)
    {
        $this->idSource = $idSource;

        return $this;
    }

    /**
     * Get idSource
     *
     * @return integer
     */
    public function getIdSource()
    {
        return $this->idSource;
    }

    /**
     * Set idLanguage
     *
     * @param integer $idLanguage
     *
     * @return BaseArrayLang
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
     * Set description
     *
     * @param string $description
     *
     * @return BaseArrayLang
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
     * Set orderBy
     *
     * @param integer $orderBy
     *
     * @return BaseArrayLang
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;

        return $this;
    }

    /**
     * Get orderBy
     *
     * @return integer
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }
}
