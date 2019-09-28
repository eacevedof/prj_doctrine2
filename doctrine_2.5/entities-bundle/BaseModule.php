<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * BaseModule
 *
 * @ORM\Table(name="base_module")
 * @ORM\Entity(repositoryClass="AppBundle\Entities\BaseModule")
 */
class BaseModule
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
     * @ORM\Column(name="order_by", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $orderBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $idType;

    /**
     * @var string
     *
     * @ORM\Column(name="notedev", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $notedev;

    /**
     * @var string
     *
     * @ORM\Column(name="noteuser", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $noteuser;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_shortcut", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isShortcut;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_select_menu", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isSelectMenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_insert_menu", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isInsertMenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_pick", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isPick;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_select", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isSelect;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_insert", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isInsert;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_read", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isRead;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_update", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_delete", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isDelete;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_quarantine", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isQuarantine;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_excelexport", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isExcelexport;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_print", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isPrint;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_foreign", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $isForeign;


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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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
     * @return BaseModule
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

    /**
     * Set idType
     *
     * @param integer $idType
     *
     * @return BaseModule
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return integer
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Set notedev
     *
     * @param string $notedev
     *
     * @return BaseModule
     */
    public function setNotedev($notedev)
    {
        $this->notedev = $notedev;

        return $this;
    }

    /**
     * Get notedev
     *
     * @return string
     */
    public function getNotedev()
    {
        return $this->notedev;
    }

    /**
     * Set noteuser
     *
     * @param string $noteuser
     *
     * @return BaseModule
     */
    public function setNoteuser($noteuser)
    {
        $this->noteuser = $noteuser;

        return $this;
    }

    /**
     * Get noteuser
     *
     * @return string
     */
    public function getNoteuser()
    {
        return $this->noteuser;
    }

    /**
     * Set isShortcut
     *
     * @param integer $isShortcut
     *
     * @return BaseModule
     */
    public function setIsShortcut($isShortcut)
    {
        $this->isShortcut = $isShortcut;

        return $this;
    }

    /**
     * Get isShortcut
     *
     * @return integer
     */
    public function getIsShortcut()
    {
        return $this->isShortcut;
    }

    /**
     * Set isSelectMenu
     *
     * @param integer $isSelectMenu
     *
     * @return BaseModule
     */
    public function setIsSelectMenu($isSelectMenu)
    {
        $this->isSelectMenu = $isSelectMenu;

        return $this;
    }

    /**
     * Get isSelectMenu
     *
     * @return integer
     */
    public function getIsSelectMenu()
    {
        return $this->isSelectMenu;
    }

    /**
     * Set isInsertMenu
     *
     * @param integer $isInsertMenu
     *
     * @return BaseModule
     */
    public function setIsInsertMenu($isInsertMenu)
    {
        $this->isInsertMenu = $isInsertMenu;

        return $this;
    }

    /**
     * Get isInsertMenu
     *
     * @return integer
     */
    public function getIsInsertMenu()
    {
        return $this->isInsertMenu;
    }

    /**
     * Set isPick
     *
     * @param integer $isPick
     *
     * @return BaseModule
     */
    public function setIsPick($isPick)
    {
        $this->isPick = $isPick;

        return $this;
    }

    /**
     * Get isPick
     *
     * @return integer
     */
    public function getIsPick()
    {
        return $this->isPick;
    }

    /**
     * Set isSelect
     *
     * @param integer $isSelect
     *
     * @return BaseModule
     */
    public function setIsSelect($isSelect)
    {
        $this->isSelect = $isSelect;

        return $this;
    }

    /**
     * Get isSelect
     *
     * @return integer
     */
    public function getIsSelect()
    {
        return $this->isSelect;
    }

    /**
     * Set isInsert
     *
     * @param integer $isInsert
     *
     * @return BaseModule
     */
    public function setIsInsert($isInsert)
    {
        $this->isInsert = $isInsert;

        return $this;
    }

    /**
     * Get isInsert
     *
     * @return integer
     */
    public function getIsInsert()
    {
        return $this->isInsert;
    }

    /**
     * Set isRead
     *
     * @param integer $isRead
     *
     * @return BaseModule
     */
    public function setIsRead($isRead)
    {
        $this->isRead = $isRead;

        return $this;
    }

    /**
     * Get isRead
     *
     * @return integer
     */
    public function getIsRead()
    {
        return $this->isRead;
    }

    /**
     * Set isUpdate
     *
     * @param integer $isUpdate
     *
     * @return BaseModule
     */
    public function setIsUpdate($isUpdate)
    {
        $this->isUpdate = $isUpdate;

        return $this;
    }

    /**
     * Get isUpdate
     *
     * @return integer
     */
    public function getIsUpdate()
    {
        return $this->isUpdate;
    }

    /**
     * Set isDelete
     *
     * @param integer $isDelete
     *
     * @return BaseModule
     */
    public function setIsDelete($isDelete)
    {
        $this->isDelete = $isDelete;

        return $this;
    }

    /**
     * Get isDelete
     *
     * @return integer
     */
    public function getIsDelete()
    {
        return $this->isDelete;
    }

    /**
     * Set isQuarantine
     *
     * @param integer $isQuarantine
     *
     * @return BaseModule
     */
    public function setIsQuarantine($isQuarantine)
    {
        $this->isQuarantine = $isQuarantine;

        return $this;
    }

    /**
     * Get isQuarantine
     *
     * @return integer
     */
    public function getIsQuarantine()
    {
        return $this->isQuarantine;
    }

    /**
     * Set isExcelexport
     *
     * @param integer $isExcelexport
     *
     * @return BaseModule
     */
    public function setIsExcelexport($isExcelexport)
    {
        $this->isExcelexport = $isExcelexport;

        return $this;
    }

    /**
     * Get isExcelexport
     *
     * @return integer
     */
    public function getIsExcelexport()
    {
        return $this->isExcelexport;
    }

    /**
     * Set isPrint
     *
     * @param integer $isPrint
     *
     * @return BaseModule
     */
    public function setIsPrint($isPrint)
    {
        $this->isPrint = $isPrint;

        return $this;
    }

    /**
     * Get isPrint
     *
     * @return integer
     */
    public function getIsPrint()
    {
        return $this->isPrint;
    }

    /**
     * Set isForeign
     *
     * @param integer $isForeign
     *
     * @return BaseModule
     */
    public function setIsForeign($isForeign)
    {
        $this->isForeign = $isForeign;

        return $this;
    }

    /**
     * Get isForeign
     *
     * @return integer
     */
    public function getIsForeign()
    {
        return $this->isForeign;
    }
}

