<?php



/**
 * BaseUsersGroupsPermissions
 */
class BaseUsersGroupsPermissions
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
    private $deletePlatform;

    /**
     * @var string
     */
    private $deleteUser;

    /**
     * @var string
     */
    private $deleteDate;

    /**
     * @var string
     */
    private $cruCsvnote;

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
     * @var integer
     */
    private $idUserGroup;

    /**
     * @var integer
     */
    private $idModule;

    /**
     * @var integer
     */
    private $isShortcut;

    /**
     * @var integer
     */
    private $isSelectMenu;

    /**
     * @var integer
     */
    private $isInsertMenu;

    /**
     * @var integer
     */
    private $isPick;

    /**
     * @var integer
     */
    private $isSelect;

    /**
     * @var integer
     */
    private $isInsert;

    /**
     * @var integer
     */
    private $isRead;

    /**
     * @var integer
     */
    private $isUpdate;

    /**
     * @var integer
     */
    private $isDelete;

    /**
     * @var integer
     */
    private $isQuarantine;

    /**
     * @var integer
     */
    private $isExcelexport;

    /**
     * @var integer
     */
    private $isPrint;

    /**
     * @var integer
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * Set idUserGroup
     *
     * @param integer $idUserGroup
     *
     * @return BaseUsersGroupsPermissions
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

    /**
     * Set idModule
     *
     * @param integer $idModule
     *
     * @return BaseUsersGroupsPermissions
     */
    public function setIdModule($idModule)
    {
        $this->idModule = $idModule;

        return $this;
    }

    /**
     * Get idModule
     *
     * @return integer
     */
    public function getIdModule()
    {
        return $this->idModule;
    }

    /**
     * Set isShortcut
     *
     * @param integer $isShortcut
     *
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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
     * @return BaseUsersGroupsPermissions
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

